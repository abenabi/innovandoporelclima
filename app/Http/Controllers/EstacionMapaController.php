<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstacionMapaController extends Controller
{
    public function index(Request $request){
        return view('estaciones.map');
    }
}
