<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            [
                'nombre'=>'Ahuachapán',
                'zona_del_pais_id'=>'1',
            ],
            [
                'nombre'=>'Santa Ana',
                'zona_del_pais_id'=>'1',
            ],
            [
                'nombre'=>'Sonsonate',
                'zona_del_pais_id'=>'1',
            ],
            [
                'nombre'=>'La Libertad',
                'zona_del_pais_id'=>'2',
            ],
            [
                'nombre'=>'Chalatenango',
                'zona_del_pais_id'=>'2',
            ],
            [
                'nombre'=>'Cuscatlán',
                'zona_del_pais_id'=>'2',
            ],
            [
                'nombre'=>'San Salvador',
                'zona_del_pais_id'=>'2',
            ],
            [
                'nombre'=>'La Paz',
                'zona_del_pais_id'=>'3',
            ],
            [
                'nombre'=>'Cabañas',
                'zona_del_pais_id'=>'3',
            ],
            [
                'nombre'=>'San Vicente',
                'zona_del_pais_id'=>'3',
            ],
            [
                'nombre'=>'Usulután',
                'zona_del_pais_id'=>'4',
            ],
            [
                'nombre'=>'San Miguél',
                'zona_del_pais_id'=>'4',
            ],
            [
                'nombre'=>'Morazán',
                'zona_del_pais_id'=>'4',
            ],
            [
                'nombre'=>'La Unión',
                'zona_del_pais_id'=>'4',
            ],
        ];
        DB::table('departamento')->insert($data);
    }
}
