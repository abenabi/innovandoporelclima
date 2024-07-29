<?php

namespace App\Http\Controllers;
use App\Models\Estacion;
use App\Models\Variable;
use Illuminate\Http\Request;

use function Laravel\Prompts\form;

class MapController extends Controller
{
    public function index()
    {
        $variables=Variable::all();
        $datosEstaciones = Estacion::with('departamento')->get();
        // echo $datosEstaciones;
        $initialMarkers = [];
        $estacionesZonaOccidental =[];
        $estacionesZonaCentral =[];
        $estacionesZonaParacentral =[];
        $estacionesZonaOriental =[];
        foreach($datosEstaciones as $estacion){
            switch ($estacion->departamento->zona_del_pais_id) {
                case 1: // ID para Zona Occidental
                    $estacionesZonaOccidental[] = $estacion;
                    break;
                case 2: // ID para Zona Central
                    $estacionesZonaCentral[] = $estacion;
                    break;
                case 3: // ID para Zona Paracentral
                    $estacionesZonaParacentral[] = $estacion;
                    break;
                case 4: // ID para Zona Oriental
                    $estacionesZonaOriental[] = $estacion;
                    break;
            }
            $latitude = (float) $estacion->latitude;
            $longitude = (float) $estacion->longitude;
            $initialMarkers[]=[
                    'id_estacion'=>$estacion->id,
                    'position' => [
                        'lat' => $latitude,
                        'lng' => $longitude,
                    ],
                    'draggable' => false,
                    'title'=>$estacion->nombre,
                    'departamento'=>$estacion->departamento->nombre,
            ];
        };
        // echo $variables;
        return view('welcome', compact('initialMarkers','estacionesZonaOccidental','estacionesZonaCentral','estacionesZonaParacentral','estacionesZonaOriental','variables'));
    }
}

