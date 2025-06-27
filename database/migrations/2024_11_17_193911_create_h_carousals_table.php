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
        Schema::create('h_carousals', function (Blueprint $table) {
            $table->id();
            $table->string('paragraph1');
            $table->string('paragraph2');
            $table->string('paragraph3');
            $table->string('paragraph4');
            $table->string('heading');
            $table->string('heading2');
            $table->string('button');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_carousals');
    }
};
