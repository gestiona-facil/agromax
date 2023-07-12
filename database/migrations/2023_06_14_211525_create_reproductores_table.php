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
        Schema::create('reproductors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ganado_id');
            $table->string('alias')->nullable();
            $table->string('tipo_alimentacion')->nullable();
            $table->float('tiempo_madurez');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reproductores');
    }
};
