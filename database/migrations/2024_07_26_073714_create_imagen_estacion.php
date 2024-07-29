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
        Schema::create('imagen_estacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->foreignId('instrumento_id')->constrained('instrumento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('estacion_id')->constrained('estacion')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->string('file_path');
            $table->string('descripcion',60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagen_estacion');
    }
};
