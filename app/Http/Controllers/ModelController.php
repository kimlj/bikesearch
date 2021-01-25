<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_name;

class ModelController extends Controller
{
    
    public function index (){
        //fetching all data from the database using (fetch) ::all
        //and saving it to a variable(object type na siya)
        $models = Model_name::all();

        return view('model_names',[
            'models' => $models
        ]);
    }

    // public function show (){

    // }

    // public function get (){
    //     //accessing the database and getting a record
    //     //save to a variable first
    //     //$models is an object containing lists of models of bikes using ::all
    //     $models = Model_name::all();
        
    // }
}
