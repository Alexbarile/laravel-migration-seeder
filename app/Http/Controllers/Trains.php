<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Trains extends Controller
{
    public function index(){
        $trains = Train::all();
       
        return view('index');

    }
}
