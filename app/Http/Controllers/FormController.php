<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FormController extends Controller
{
    public function login_page(){
        return view("form");
    }
    public function get_data(Request $request){
        $request->validate([
            "userid"=>"required|max:10",
            "password"=>"required|min:5",
            "age"=>"required"
        ]);
        return $request->input();
    }
    public function noaccess(){
        return view("middlewareNoaccess");
    }
    public function secreat(){
        return view("secreat");
    }
}
