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
        Schema::create('lecherias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('madre_id');
            $table->text('alias');
            $table->text('tipo_alimento');
            $table->float('cant_meta');
            $table->text('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecherias');
    }
};
