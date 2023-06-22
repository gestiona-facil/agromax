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
        Schema::create('terrenos', function (Blueprint $table) {
            $table->id();
            $table->text('ubicacion');
            $table->float('hectareas');
            $table->enum('tipo_suelo');
            $table->text('nivel_humedad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terrenos');
    }
};
