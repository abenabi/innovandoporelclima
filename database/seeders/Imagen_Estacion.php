<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Imagen_Estacion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                //id 1
                'estacion_id'=>'1',
                'file_path'=>'Imagenes/san_andres_toma_aerea.png',
                'descripcion'=>"Toma aerea de la estación",
            ],
            [
                //id 2
                'estacion_id'=>'1',
                'file_path'=>'Imagenes/ena.jpg',
                'descripcion'=>"Escuela Nacional de Agricultura",
            ],
            [
                //id 3
                'estacion_id'=>'1',
                'file_path'=>'Imagenes/abrigo_meteorologico.jpeg',
                'descripcion'=>"Abrigo meteorológico",
            ],
            [
                //id 3
                'estacion_id'=>'2',
                'file_path'=>'Imagenes/todos.jpeg',
                'descripcion'=>"Estacion meteorológica Montecristo A",
            ],
            [
                //id 3
                'estacion_id'=>'3',
                'file_path'=>'Imagenes/todos.jpeg',
                'descripcion'=>"Estacion meteorológica Nueva Concepcion",
            ],
            [
                //id 3
                'estacion_id'=>'4',
                'file_path'=>'Imagenes/todos.jpeg',
                'descripcion'=>"Estacion meteorológica Santiago María",
            ],
        ];
        DB::table('imagen_estacion')->insert($data);
    }
}
