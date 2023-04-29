<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    // public function index($name){
    //     echo $name;
    //     echo " Hello I am User Controller!";
    // }
        public function loadView(){
            return view("user1",["name"=>"Muzammil"]);
        }
        public function static($name){
            return view("users",["myname"=>$name]);
        }
        public function user(){
            return view("user2");
        }
        public function condition(){
            return view("user3",["name"=>"muzammil"]);
        }
        public function loop(){
            $data=["users"=>["Muzammil", "Ali", "Asad", "Haider", "Rashid"]];
            return view("foreach",$data);
        }
}

