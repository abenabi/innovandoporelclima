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
        Schema::create('parametro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('instrumento_id')->constrained('instrumento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('unidad_de_medida_id')->constrained('unidad_de_medida')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->string('nombre',50);
            $table->string('abreviatura',10);
            $table->string('parametroId',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametro');
    }
};
