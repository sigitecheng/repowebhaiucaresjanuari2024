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
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('image')->nullable(); // Kolom image dapat berisi NULL
            $table->string('instagram')->nullable(); // Kolom instagram dapat berisi NULL
            $table->string('tiktok')->nullable(); // Kolom instagram dapat berisi NULL
            $table->string('email')->unique(); // Kolom email harus unik
            $table->string('wa')->nullable(); // Kolom wa dapat berisi NULL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};
