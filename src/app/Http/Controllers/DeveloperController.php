<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Developer;
use Exception;
use Illuminate\Http\Request;

class DeveloperController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create(Request $request) {
        try {
            $developer = Developer::create($request->all());
     
     
             return response()->json($developer);
        } catch(Exception $e) {
            echo 'Exception Catch: ', $e->getMessage(), "\n";
        }
    }

    public function list() {
        try {
            return Developer::paginate(10);

        }catch(Exception $e) {
            echo 'Exception Catch: ', $e->getMessage(), "\n";
        }
    }

    public function findById($developerId) {   
        try {
            return Developer::findOrFail($developerId);
        }catch(Exception $e) {
            echo 'Exception Catch: ', $e->getMessage(), "\n";
        }
    }


    public function update($developerId, Request $request) {
        try {
            $developer = Developer::findOrFail($developerId);
    
            $developer->update($request->all());
    
            return response()->json(['data' => ['message' => 'Developer updated!']]);
        } catch(Exception $e) {
            echo 'Exception Catch: ', $e->getMessage(), "\n";
        }
    }

    public function remove($developerId) {
        try {
            $developer = Developer::findOrFail($developerId);
    
            $developer->delete();
    
            return response()->json(['data' => ['message' => 'Developer deleted!']]);
        } catch(Exception $e) {
            echo 'Exception Catch: ', $e->getMessage(), "\n";
        }
    }
    
}
