<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaDelPaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            [
                'nombre'=>'Zona Occidental',
            ],
            [
                'nombre'=>'Zona Central',
            ],
            [
                'nombre'=>'Zona Paracentral',
            ],
            [
                'nombre'=>'Zona Oriental',
            ],
        ];
        DB::table('zona_del_pais')->insert($data);
    }
}
