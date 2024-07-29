<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Imagen_Instrumento extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                //id 1
                'instrumento_id'=>'1',
                'file_path'=>'Imagenes/registro_termografo.jpeg',
                'descripcion'=>"Registro del termógrafo",
            ],
            [
                //id 2
                'instrumento_id'=>'1',
                'file_path'=>'Imagenes/termometro_y_termografo.jpeg',
                'descripcion'=>"Termometro y termografo dentro del abrigo meteorológico",
            ],
            [
                //id 3
                'instrumento_id'=>'2',
                'file_path'=>'Imagenes/pluviografo.jpeg',
                'descripcion'=>"Pluviográfo con sus registros y proveta.",
            ],
        ];
        DB::table('imagen_instrumento')->insert($data);
    }
}
