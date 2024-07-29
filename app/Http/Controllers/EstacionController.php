<?php

namespace App\Http\Controllers;
use App\Models\Estacion;
use Illuminate\Http\Request;
use App\Models\Variable;


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
        $variables=Variable::all();
        $estacion=Estacion::with('departamento')->find($id);
        $primeraImagen = $estacion->imagen_estacion[0];
        // echo $estacion->instrumentos;
        return view('estacion', compact('estacion','primeraImagen','variables'));
    }
}
