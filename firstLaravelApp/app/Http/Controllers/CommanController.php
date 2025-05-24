<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CommanController extends Controller
{
    function testcontroller(){
        echo "test";
    }

    function aboutShow(){
        return view('about',["name"=>"Megha","isAdmin"=>true]);
    }
}


