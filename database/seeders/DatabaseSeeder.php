<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([Unidad_de_Medida::class]);

        $this->call([EstadoSeeder::class]);
        $this->call([Variable::class]);
        $this->call([Instrumento::class]);

        $this->call([Parametro::class]);

        $this->call([ZonaDelPaisSeeder::class]);
        $this->call([DepartamentoSeeder::class]);
        $this->call([EstacionSeeder::class]);
        $this->call([Estacion_Tiene_Instrumento::class]);
        $this->call([Imagen_Estacion::class]);
        $this->call([Imagen_Instrumento::class]);
        $this->call([registros::class]);




    }
}
