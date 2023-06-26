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
        Schema::create('fertilizaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siembra_id');
            $table->text('nombre');
            $table->string('tipo');
            $table->date('fecha');
            $table->float('cantidad');
            $table->string('metodo_aplicacion');
            $table->text('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertilizaciones');
    }
};
