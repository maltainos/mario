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
        Schema::create('tracers', function (Blueprint $table) {
            $table->id();
            $table->string('action')->default('Progresso');
            $table->string('subject');
            $table->unsignedBigInteger('to');
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('expediente_id');
            $table->text('notes');
            $table->timestamps();
            $table->foreign('from')->references('id')->on('direcoes');
            $table->foreign('to')->references('id')->on('direcoes');
            $table->foreign('expediente_id')->references('id')->on('expedientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracers');
    }
};
