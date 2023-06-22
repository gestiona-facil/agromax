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
        Schema::create('informaciones_generales', function (Blueprint $table) {
            $table->id();
            $table->text('nombre_empresa_');
            $table->text('codigo_hierro');
            $table->float('cant_hectareas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informaciones_generales');
    }
};
