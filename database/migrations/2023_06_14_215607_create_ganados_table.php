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
        Schema::create('ganados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('madre_id')->nullable()->default(0);// 0 -> desconocidos o no especificados
            $table->unsignedBigInteger('padre_id')->nullable()->default(0);// 0 -> desconocidos o no especificados
            $table->text('identificacion');
            $table->text('tipo');
            $table->text('raza');
            $table->date('fecha_nacimiento');
            $table->boolean('sexo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganados');
    }
};
