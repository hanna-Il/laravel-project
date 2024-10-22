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
        Schema::create('audio_exercises', function (Blueprint $table) {
            $table->id();
            $table->string('audio_file');
            $table->string('correct_translation');
            $table->string('wrong_translation_1');
            $table->string('wrong_translation_2');
            $table->string('wrong_translation_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audio_exercises');
    }
};
