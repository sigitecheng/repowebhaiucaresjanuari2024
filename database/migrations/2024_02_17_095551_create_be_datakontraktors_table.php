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
        Schema::create('be_datakontraktors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('kota');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('pimpinan_perusahaan');
            $table->string('sertifikat');
            $table->text('pengalaman');
            $table->text('bidang_keahlian');
            $table->string('dokumen'); // Nama file dokumen 1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('be_datakontraktors');
    }
};
