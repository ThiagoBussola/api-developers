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

    public function index() {
        return Developer::paginate(10);
    }

    public function show($developerId) {
        return Developer::findOrFail($developerId);
    }


    // public function update() {

    // }

    // public function remove() {

    // }
    
}
