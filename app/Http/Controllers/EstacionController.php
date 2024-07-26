<?php

namespace App\Http\Controllers;
use App\Models\Estacion;
use Illuminate\Http\Request;

class EstacionController extends Controller
{
    // public function index(){
    //     $this->authorize('manage_estacion');
    //     $estacionQuery = Estacion::query();
    //     $estaciones = $estacionQuery->paginate(25);

    //     return view('estaciones.index',compact('estaciones'));
    // }

    // public function show(Estacion $estacion){
    //     return view('outlets.show',compact('outlet'));
    // } 

    public function consultar_estacion($id){
        $estacion=Estacion::with('departamento')->find($id);
        // $estacion_tiene_instrumentos=Estacion::find($id);
        // echo $estacion_tiene_instrumentos;
        // $instrumentos_de_estacion = [];
        // foreach ($estacion_tiene_instrumentos->estacion_tiene_instrumento as $instrumentos) {
        //     $instrumentos_de_estacion[] = $instrumentos;
        // }
        // echo $estacion;
        // echo $estacion->instrumentos;
        return view('estacion', compact('estacion'));
    }
}
