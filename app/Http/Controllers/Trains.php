<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// richiamo MODEL

use App\Models\Train as Train;

class Trains extends Controller
{
    public function trains(){
        $trains = Train::all();
        return view('trains', compact('trains'));

    }
}
