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
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('estacion_instrumento_id')->constrained('estacion_instrumento')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('estacion_id')->constrained('estacion')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->string('fecha');
            $table->string('valor',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
