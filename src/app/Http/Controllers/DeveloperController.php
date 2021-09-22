<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create(Request $request) {
       $developer = Developer::create($request->all());


        return response()->json($developer);
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
