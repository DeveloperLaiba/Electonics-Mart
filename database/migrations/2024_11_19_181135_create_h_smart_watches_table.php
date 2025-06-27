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
        Schema::create('h_smart_watches', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('paragraph1');
            $table->string('heading');
            $table->string('paragraph2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_smart_watches');
    }
};
