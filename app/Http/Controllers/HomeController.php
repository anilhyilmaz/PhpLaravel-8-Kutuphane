<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.index");
}
    public function test($id,$name){
        $data["id"] = $id;
        $data["name"] = $name;
        return view("home.test",$data);
    }
    public function aboutus(){
        return view("home.about");
    }
}
