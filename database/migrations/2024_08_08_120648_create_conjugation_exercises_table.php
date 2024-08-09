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
        Schema::create('conjugation_exercises', function (Blueprint $table) {
            $table->id();
            $table->string('verb');
            $table->string('tense');
            $table->string('person');
            $table->string('correct_form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conjugation_exercises');
    }
};
