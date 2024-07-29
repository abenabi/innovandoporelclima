<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Parametro extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                /*id 1*/
                'nombre'=>'Lluvia acumulada',
                'abreviatura'=>'lluvia',
                'parametroId'=>'pc',
                'icono_file_path'=>'Iconos/lluvia_acumulada.gif',
                'instrumento_id'=>'2',
                'unidad_de_medida_id'=>'5',
            ],
            [
                //id 2
                'nombre'=>'Lluvia acumulada',
                'abreviatura'=>'lluvia',
                'parametroId'=>'acu',
                'icono_file_path'=>'Iconos/lluvia_acumulada.gif',
                'instrumento_id'=>'2',
                'unidad_de_medida_id'=>'5',
            ],
            [
                //id 3
                'nombre'=>'Lluvia diaria',
                'abreviatura'=>'pd',
                'parametroId'=>'pd',
                'icono_file_path'=>'Iconos/lluvia_diaria.gif',
                
                'instrumento_id'=>'2',
                'unidad_de_medida_id'=>'5',
            ],
            [
                //id 4
                'nombre'=>'Precipitación',
                'abreviatura'=>'pd',
                'parametroId'=>'p',
                'icono_file_path'=>'Iconos/precipitacion.gif',
                
                'instrumento_id'=>'2',
                'unidad_de_medida_id'=>'5',
            ],
            [
                //id 5
                'nombre'=>'Temperatura Húmeda Promedio',
                'abreviatura'=>'humeda',
                'parametroId'=>'thm',
                'icono_file_path'=>'Iconos/temperatura_humeda.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',    
            ],
            [
                //id 6
                'nombre'=>'Temperatura Máxima Absoluta',
                'abreviatura'=>'maxima_abs',
                'parametroId'=>'tmaxa',
                'icono_file_path'=>'Iconos/temperatura_maxima.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 7
                'nombre'=>'Temperatura Máxima Promedio',
                'abreviatura'=>'maxima',
                'parametroId'=>'tmaxm',
                'icono_file_path'=>'Iconos/temperatura_maxima.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 8
                'nombre'=>'Temperatura Minima Absoluta',
                'abreviatura'=>'minima_abs',
                'parametroId'=>'tmina',
                'icono_file_path'=>'Iconos/temperatura_minima.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 9
                'nombre'=>'Temperatura Mínima Promedio',
                'abreviatura'=>'minima',
                'parametroId'=>'tminm',
                'icono_file_path'=>'Iconos/temperatura_minima.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 10
                'nombre'=>'Temperatura Promedio',
                'abreviatura'=>'media',
                'parametroId'=>'tsm',
                'icono_file_path'=>'Iconos/temperatura_media.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 11
                'nombre'=>'Temperatura Húmeda',
                'abreviatura'=>'th',
                'parametroId'=>'th',
                'icono_file_path'=>'Iconos/temperatura_humeda.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 12
                'nombre'=>'Temperatura Máxima',
                'abreviatura'=>'tmax',
                'parametroId'=>'thm',
                'icono_file_path'=>'Iconos/temperatura_maxima.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 13
                'nombre'=>'Temperatura Media',
                'abreviatura'=>'ts',
                'parametroId'=>'ts',
                'icono_file_path'=>'Iconos/temperatura_media.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
            [
                //id 14
                'nombre'=>'Temperatura Mínima',
                'abreviatura'=>'tmin',
                'parametroId'=>'tmin',
                'icono_file_path'=>'Iconos/temperatura_minima.gif',
                
                'instrumento_id'=>'1',
                'unidad_de_medida_id'=>'10',
            ],
        ];
        DB::table('parametro')->insert($data);
    }
}
