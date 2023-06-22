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
        Schema::create('control_sanitario_vegetales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siembra_id');
            $table->text('afecciones');
            $table->date('fecha');
            $table->date('fecha_control_proximo');
            $table->text('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_sanitario_vegetales');
    }
};
