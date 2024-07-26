<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Estacion_Tiene_Instrumento extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                //id 1
                'marca'=>'Campbell Scientific',
                'fecha_de_fundacion'=>'2001-10-10',
                'estado_id'=>'2',
                'estacion_id'=>'1',
                'instrumento_id'=>'2',
            ],
            [
                //id 2
                'marca'=>'Campbell Scientific',
                'fecha_de_fundacion'=>'2001-10-10',
                'estado_id'=>'2',
                'estacion_id'=>'2',
                'instrumento_id'=>'2',
            ],
            [
                //id 3
                'marca'=>'Campbell Scientific',
                'fecha_de_fundacion'=>'1990-10-10',
                'estado_id'=>'2',
                'estacion_id'=>'3',
                'instrumento_id'=>'2',
            ],
            [
                //id 4
                'marca'=>'OTT Hydromet',
                'fecha_de_fundacion'=>'2003-10-10',
                'estado_id'=>'1',
                'estacion_id'=>'4',
                'instrumento_id'=>'2',
            ],
            [
                //id 5
                'marca'=>'Testo',
                'fecha_de_fundacion'=>'2010-10-10',
                'estado_id'=>'2',
                'estacion_id'=>'1',
                'instrumento_id'=>'1',
            ],
            [
                //id 6
                'marca'=>'MadgeTech',
                'fecha_de_fundacion'=>'2011-10-10',
                'estado_id'=>'2',
                'estacion_id'=>'2',
                'instrumento_id'=>'1',
            ],
            [
                //id 7
                'marca'=>'MadgeTech',
                'fecha_de_fundacion'=>'2012-10-10',
                'estado_id'=>'2',
                'estacion_id'=>'3',
                'instrumento_id'=>'1',
            ],
            [
                //id 8
                'marca'=>'Testo',
                'fecha_de_fundacion'=>'2013-10-10',
                'estado_id'=>'1',
                'estacion_id'=>'4',
                'instrumento_id'=>'1',
            ],
        ];
        DB::table('estacion_instrumento')->insert($data);
    }
}
