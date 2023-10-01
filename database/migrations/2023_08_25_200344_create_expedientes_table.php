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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->string('tracer_code');
            $table->string('code');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('course');
            $table->string('period');
            $table->string('email');
            $table->string('phone');
            $table->string('name');
            $table->string('file');
            $table->text('notes');
            $table->boolean('status');
            $table->timestamp('aproveted_at');
            $table->string('progress');
            $table->unsignedBigInteger('folder_id');
            $table->timestamps();

            $table->foreign('folder_id')->references('id')->on('folders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
