<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            [
                'nombre'=>'San Andrés',
                'direccion'=>'Escuela Nacional de Agricultura, Carretera Panamericana KM 33.5, El Chilamatal',
                'latitude'=>'13.80833333',
                'longitude'=>'-89.40666667',
                'departamento_id'=>'4',
                'fecha_de_fundacion'=>'1950-01-01',
                'responsable'=>'Ministerio de medio ambiente',
                'certificaciones'=>'ISO/IEC 17025, CE (Conformité Européenne)',
                'accesibilidad_y_horarios'=>'Lunes a viernes de 7:00 am - 5:00 pm',
                'estado_id'=>'2',
            ],
            [
                'nombre'=>'Montecristo A',
                'direccion'=>'San José Ingenio',
                'latitude'=>'14.363',
                'longitude'=>'-89.400',
                'departamento_id'=>'2',
                'fecha_de_fundacion'=>'1970-01-01',
                'responsable'=>'Ministerio de medio ambiente',
                'certificaciones'=>'IUL (Underwriters Laboratories), NIST (National Institute of Standards and Technology)',
                'accesibilidad_y_horarios'=>'Lunes a viernes de 7:00 am - 4:00 pm',
                'estado_id'=>'2',
            ],
            [
                'nombre'=>'Nueva Concepción',
                'direccion'=>'Cantón Laguna Seca',
                'latitude'=>'14.125',
                'longitude'=>'-89.29',
                'departamento_id'=>'5',
                'fecha_de_fundacion'=>'1930-01-01',
                'responsable'=>'Ministerio de medio ambiente',
                'certificaciones'=>'ISO/IEC 17025, CE (Conformité Européenne)',
                'accesibilidad_y_horarios'=>'Lunes a viernes de 7:00 am - 5:00 pm',
                'estado_id'=>'1',
            ],
            [
                'nombre'=>'Santiago Maria',
                'direccion'=>'Santiago de María',
                'latitude'=>'13.485',
                'longitude'=>'-88.47166667',
                'departamento_id'=>'11',
                'fecha_de_fundacion'=>'1935-01-01',
                'responsable'=>'Ministerio de medio ambiente',
                'certificaciones'=>'ISO/IEC 17025, CE (Conformité Européenne),NIST (National Institute of Standards and Technology)',
                'accesibilidad_y_horarios'=>'Lunes a viernes de 8:00 am - 4:00 pm',
                'estado_id'=>'2',
            ],
        ];
        DB::table('estacion')->insert($data);
    }
}
