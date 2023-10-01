<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Direcao;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('name')->unique();
            $table->string('alias')->unique()->nullable();
            $table->unsignedBigInteger('direcao_id');
            $table->timestamps();

            $table->foreign('direcao_id')->references('id')->on('direcoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folders');
    }
};
