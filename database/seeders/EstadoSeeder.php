<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
    

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            [
                'nombre'=>'En mantenimiento',
                'icono_file_path'=>'Iconos/mantenimiento2.gif',
            ],
            [
                'nombre'=>'Activa',
                'icono_file_path'=>'Iconos/activo2.gif',
            ],
        ];
        DB::table('estado')->insert($data);
    }
}
