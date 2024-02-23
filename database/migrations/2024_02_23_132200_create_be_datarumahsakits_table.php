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
        Schema::create('be_datarumahsakits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rumahsakit');
            $table->string('alamat');
            $table->string('kota');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('pemilik');
            $table->string('sertifikat');
            $table->text('pengalaman');
            $table->string('dokumen');
            $table->integer('jumlah_dokter');
            $table->integer('jumlah_perawat');
            $table->boolean('fasilitas_darurat');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('be_datarumahsakits');
    }
};
