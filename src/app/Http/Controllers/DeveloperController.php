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
        return Developer::paginate(10);
    }

    public function findById($developerId) {
        return Developer::findOrFail($developerId);
    }


    public function update($developerId, Request $request) {
        try {
            $developer = Developer::find($developerId);
    
            $developer->update($request->all());
    
            return response()->json(['data' => ['message' => 'Developer updated!']]);
        } catch(Exception $e) {
            echo 'Exception Catch: ', $e->getMessage(), "\n";
        }
    }

    public function remove($developerId) {
        try {
            $developer = Developer::find($developerId);
    
            $developer->delete();
    
            return response()->json(['data' => ['message' => 'Developer deleted!']]);
        } catch(Exception $e) {
            echo 'Exception Catch: ', $e->getMessage(), "\n";
        }
    }
    
}
