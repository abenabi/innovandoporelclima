<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Unidad_de_Medida extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                //id 1
                'nombre'=>'Hora',
                'abreviatura'=>'Hora',
            ],
            [
                //id 2
                'nombre'=>'Porcentaje',
                'abreviatura'=>'%%',
            ],
            [
                //id 3
                'nombre'=>'Horas',
                'abreviatura'=>'Horas#',
            ],
            [
                //id 4
                'nombre'=>'Décimas',
                'abreviatura'=>'Décimas',
            ],
            [
                //id 5
                'nombre'=>'Milímetros',
                'abreviatura'=>'mm',
            ],
            [
                //id 6
                'nombre'=>'Milímetros de mercurio',
                'abreviatura'=>'mmHg',
            ],
            [
                //id 7
                'nombre'=>'Calorías',
                'abreviatura'=>'Calorías',
            ],
            [
                //id 8
                'nombre'=>'Estado de rocío',
                'abreviatura'=>'No hay, Mojado, Encarchado',
            ],
            [
                //id 9
                'nombre'=>'Estado del suelo',
                'abreviatura'=>'Seco, Mojado, Encarchado',
            ],
            [
                //id 10
                'nombre'=>'Grados centígrados',
                'abreviatura'=>'°C',
            ],
            [
                //id 11
                'nombre'=>'Beaufort',
                'abreviatura'=>'Beaufort',
            ],
            [
                //id 12
                'nombre'=>'Rumbo',
                'abreviatura'=>'Rumbo',
            ],
            [
                //id 13
                'nombre'=>'Kilómetros',
                'abreviatura'=>'km',
            ],

        ];
        DB::table('unidad_de_medida')->insert($data);
    }
}
