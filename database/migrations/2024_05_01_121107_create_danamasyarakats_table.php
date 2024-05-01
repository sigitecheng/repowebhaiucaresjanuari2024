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
        Schema::create('danamasyarakats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->bigInteger('jumlah_donasi'); // Gunakan tipe unsignedBigInteger untuk nilai positif besar
            $table->timestamps();

            // Validasi nilai jumlah_donasi agar tidak melebihi 1 miliar
            // $table->foreign('jumlah_donasi')->constrained()->unsigned()->max(1000000000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danamasyarakats');
    }
};
