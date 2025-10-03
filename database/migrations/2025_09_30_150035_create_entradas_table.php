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
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();


            $table->string('titulo', 50);
            $table->string('imagen', 20);
            $table->string('tag', 20);
            $table->text('contenido');
            $table->timestamps();


            // para duplicar la linea sería  SHIFT - Alt - Flechija abajo

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
