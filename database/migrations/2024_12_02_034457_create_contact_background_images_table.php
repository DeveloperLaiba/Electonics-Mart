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
        Schema::create('contact_background_images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('paragraph1');
            $table->string('paragraph2');
            $table->string('paragraph3');
            $table->string('paragraph4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_background_images');
    }
};
