<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// richiamo MODEL

use App\Models\Train as Train;

class Trains extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('index');

    }
}
