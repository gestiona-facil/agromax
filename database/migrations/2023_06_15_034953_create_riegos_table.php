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
        Schema::create('riegos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siembra_id');
            $table->float('cantidad');
            $table->integer('frecuencia');
            $table->text('metodo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riegos');
    }
};
