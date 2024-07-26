<?php

namespace App\Http\Controllers\Api;

use App\Estacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Estacion as EstacionResource;

class EstacionController extends Controller
{
    //
    /**
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\JsonResponse
     */

     public function index(Request $request){

      $estaciones = Estacion::all();
      $geoJSONdata = $estaciones->map(function($estacion){
         return [
            'type'         => 'Feature',
            'properties'   => new EstacionResource($estacion),
            'geometry'     =>[
               'type'         => 'Point',
               'coordinates'  => [
                  $estacion->longitude,
                  $estacion->latitude,
               ],
            ],
         ];
      });

      return response()->json([
         'type'      => 'FeatureCollection',
         'features'  => $$geoJSONdata
      ]);
     }

}