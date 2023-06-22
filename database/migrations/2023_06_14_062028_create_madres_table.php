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
        Schema::create('madres', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('ganado_id');
            $table->unsignedBigInteger('lecheria_id');
            $table->string('alias');
            $table->boolean('gestando');
            $table->float('cant_leche');
            $table->integer('tiempo_parto');
            $table->date('fecha_inicio_gestacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('madres');
    }
};
