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
        Schema::create('be_datainstansipendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
                $table->string('alamat');
                $table->string('kota');
                $table->string('nomor_telepon');
                $table->string('email');
                $table->string('kepala_sekolah');
                $table->string('akreditasi');
                $table->text('pengalaman');
                $table->string('dokumen');
                $table->integer('jumlah_guru');
                $table->integer('jumlah_siswa');
                $table->boolean('fasilitas_olahraga');
            $table->text('deskripsi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('be_datainstansipendidikans');
    }
};
