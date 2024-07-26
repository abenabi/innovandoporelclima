<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('departamento_id')->constrained('departamento')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->string('nombre',60);
            $table->string('direccion',100);
            $table->string('latitude',15);
            $table->string('longitude',15);
            $table->foreignId('estado_id')->constrained('estado')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fecha_de_fundacion');
            $table->string('responsable',100);
            $table->string('certificaciones',100);
            $table->string('accesibilidad_y_horarios',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estacion');
    }
};
