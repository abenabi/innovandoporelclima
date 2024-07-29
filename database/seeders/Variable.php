<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Variable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                //id 1
                'nombre'=>'Fenomenos',
                'icono_file_path'=>'Iconos/fenomenos.gif',
            ],
            [
                //id 2
                'nombre'=>'Humedad',
                'icono_file_path'=>'Iconos/humedad.gif',
            ],
            [
                //id 3
                'nombre'=>'Luz Solar',
                'icono_file_path'=>'Iconos/luz_solar.gif',

            ],
            [
                //id 4
                'nombre'=>'Nubosidad',
                'icono_file_path'=>'Iconos/nubosidad.gif',

            ],
            [
                //id 5
                'nombre'=>'Precipitación',
                'icono_file_path'=>'Iconos/precipitacion.gif',

            ],
            [
                //id 6
                'nombre'=>'Presión de Vapor',
                'icono_file_path'=>'Iconos/presion_de_vapor.gif',

            ],
            [
                //id 7
                'nombre'=>'Radiación',
                'icono_file_path'=>'Iconos/radiacion.gif',

            ],
            [
                //id 8
                'nombre'=>'Rocío',
                'icono_file_path'=>'Iconos/Rocio.gif',

            ],
            [
                //id 9
                'nombre'=>'Suelo',
                'icono_file_path'=>'Iconos/suelo.gif',

            ],
            [
                //id 10
                'nombre'=>'Temperatura',
                'icono_file_path'=>'Iconos/temperatura.gif',
            ],
            [
                //id 11
                'nombre'=>'Viento',
                'icono_file_path'=>'Iconos/viento.gif',
            ],
            [
                //id 12
                'nombre'=>'Visibilidad',
                'icono_file_path'=>'Iconos/visibilidad.gif',
            ],

        ];
        DB::table('variable')->insert($data);
    }
}
