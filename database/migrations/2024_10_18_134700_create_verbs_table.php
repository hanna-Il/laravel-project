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
        Schema::create('verbs', function (Blueprint $table) {
            $table->id();
            $table->string('infinitive');
            $table->string('present_ich');
            $table->string('present_du');
            $table->string('present_er_sie_es');
            $table->string('preterite');
            $table->string('perfect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verbs');
    }
};
