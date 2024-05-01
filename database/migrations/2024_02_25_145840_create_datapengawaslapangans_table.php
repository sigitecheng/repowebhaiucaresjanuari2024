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
        // Schema::create('datapengawaslapangans', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama'); // Nama lengkap dari penanggung jawab
        //     $table->string('email')->unique(); // Alamat email unik dari penanggung jawab
        //     $table->string('telepon'); // Nomor telepon dari penanggung jawab
        //     $table->date('tanggal_lahir'); // TanggaSl lahir dari penanggung jawab
        //     $table->string('ktp_number')->unique()->nullable(); // Nomor KTP dari penanggung jawab, diatur sebagai unik dan opsional
        //     $table->string('foto_npwp')->nullable(); // Path untuk menyimpan foto NPWP dari penanggung jawab
        //     $table->string('foto_ktp')->nullable(); // Path untuk menyimpan foto KTP dari penanggung jawab
        //     $table->text('alamat')->nullable(); // Alamat tempat tinggal atau kantor penanggung jawab (opsional)
        //     $table->string('selfie_photo')->nullable(); // Path untuk menyimpan foto selfie dari penanggung jawab, diatur sebagai opsional
        //     $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable(); // Jenis kelamin penanggung jawab
        //     $table->string('agama')->nullable(); // Agama penanggung jawab
        //     $table->string('pendidikan_terakhir')->nullable(); // Tingkat pendidikan terakhir penanggung jawab
        //     $table->string('pekerjaan')->nullable(); // Pekerjaan dari penanggung jawab
        //     $table->string('nama_perusahaan')->nullable(); // Nama perusahaan tempat bekerja penanggung jawab
        //     $table->string('npwp')->unique()->nullable(); // Nomor Pokok Wajib Pajak (NPWP) penanggung jawab
        //     $table->timestamps(); // Informasi waktu pembuatan dan pembaruan
        // });

        Schema::create('datapengawaslapangans', function (Blueprint $table) {
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
        Schema::dropIfExists('datapengawaslapangans');
    }
};
