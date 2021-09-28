<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function home(){
        return view('register');
    }

    public function create(Request $request){
        //dd($request->all());
        if(!empty($request->input('name')) && !empty($request->input('phon'))){
            dd($request->all());
        } else{
            echo "error";
        }
    }
}
