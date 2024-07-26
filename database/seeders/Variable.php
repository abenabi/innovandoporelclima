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
            ],
            [
                //id 2
                'nombre'=>'Humedad',
            ],
            [
                //id 3
                'nombre'=>'Luz Solar',
            ],
            [
                //id 4
                'nombre'=>'Nubosidad',
            ],
            [
                //id 5
                'nombre'=>'Precipitación',
            ],
            [
                //id 6
                'nombre'=>'Presión de Vapor',
            ],
            [
                //id 7
                'nombre'=>'Radiación',
            ],
            [
                //id 8
                'nombre'=>'Rocío',
            ],
            [
                //id 9
                'nombre'=>'Suelo',
            ],
            [
                //id 10
                'nombre'=>'Temperatura',
            ],
            [
                //id 11
                'nombre'=>'Viento',
            ],
            [
                //id 12
                'nombre'=>'Visibilidad',
            ],

        ];
        DB::table('variable')->insert($data);
    }
}
