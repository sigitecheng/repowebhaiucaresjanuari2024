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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->foreignId('be_datakontraktor_id');
            $table->foreignId('be_datarumahmakan_id');
            $table->foreignId('be_datarumahsakit_id');
            $table->foreignId('be_datainstansipendidikan_id');
            // $table->foreignId('kontraktor_id')->constrained('kontraktors');
            $table->foreignId('penanggung_jawab_id');
            // $table->foreignId('penanggung_jawab_id')->constrained('penanggung_jawabs');
            $table->foreignId('pengawas_lapangan_id');
            // $table->foreignId('pengawas_lapangan_id')->constrained('pengawas_lapangans');
            $table->foreignId('datapekerjaanstatus_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('excerpt');
            $table->text('body');
           
            $table->string('lokasi');
            $table->double('anggaran', 10, 2);
            $table->date('waktu_pelaksanaan');
            $table->text('tujuan_proyek')->nullable();
            $table->text('risiko_mitigasi')->nullable();
            $table->text('dampak_lingkungan')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
