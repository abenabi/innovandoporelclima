<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class registros extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                //id 1
                'fecha'=>'21/6/2021',
                'valor'=>'33',
                'estacion_instrumento_id'=>'6',
            ],
            [
                //id 1
                'fecha'=>'22/6/2021',
                'valor'=>'30.5',
                'estacion_instrumento_id'=>'6',

            ],
            [
                //id 1
                'fecha'=>'23/6/2021',
                'valor'=>'28.8',
                'estacion_instrumento_id'=>'6',

            ],
            [
                //id 1
                'fecha'=>'24/6/2021',
                'valor'=>'32.4',
                'estacion_instrumento_id'=>'6',

            ],
            [
                //id 1
                'fecha'=>'25/6/2021',
                'valor'=>'32',
                'estacion_instrumento_id'=>'6',

            ],
            [
                //id 1
                'fecha'=>'26/6/2021',
                'valor'=>'31.2',
                'estacion_instrumento_id'=>'6',

            ],
            [
                //id 1
                'fecha'=>'27/6/2021',
                'valor'=>'29.6',
                'estacion_instrumento_id'=>'6',

            ],

        ];
        DB::table('registros')->insert($data);
    }
}
