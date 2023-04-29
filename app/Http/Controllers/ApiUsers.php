<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiUsers extends Controller
{
    public function api_data(){
        $collections = Http::get("https://reqres.in/api/users?page=1");
        return view ("apiusers",["collection"=>$collections["data"]]);
    }
}
