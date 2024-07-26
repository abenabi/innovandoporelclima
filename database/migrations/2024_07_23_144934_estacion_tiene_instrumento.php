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
        Schema::create('estacion_instrumento', function (Blueprint $table) {
            $table->unsignedBigInteger('estacion_id');
            $table->unsignedBigInteger('instrumento_id');
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('marca',25);
            $table->date('fecha_de_fundacion');
            $table->foreignId('estado_id')->constrained('estado')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estacion_id')->references('id')->on('estacion');
            $table->foreign('instrumento_id')->references('id')->on('instrumento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estacion_instrumento');
    }
};
