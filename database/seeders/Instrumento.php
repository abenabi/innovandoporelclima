<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Instrumento extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                //id 1
                'nombre'=>'Termógrafo',
                'altura_sobre_nivel_suelo'=>'250 cm',
                'descripcion'=>"Instrumento para medir temperaturas y registrarlas con el paso del tiempo con ayuda de termómetros",
                'variable_id'=>'10',
                'icono_file_path'=>'Iconos/termografo.png',
            ],
            [
                //id 2
                'nombre'=>'Pluviógrafo',
                'altura_sobre_nivel_suelo'=>'150 cm',
                'descripcion'=>"Instrumento para precipitacion. Consta de 3 partes y tiene una capacidad de 63 milímetros",
                'variable_id'=>'5',
                'icono_file_path'=>'Iconos/pluviografo.png',
            ],
        ];
        DB::table('instrumento')->insert($data);
    }
}
