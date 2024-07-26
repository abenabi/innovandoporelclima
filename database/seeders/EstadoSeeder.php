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
            ],
            [
                'nombre'=>'Activa',
            ],
        ];
        DB::table('estado')->insert($data);
    }
}
