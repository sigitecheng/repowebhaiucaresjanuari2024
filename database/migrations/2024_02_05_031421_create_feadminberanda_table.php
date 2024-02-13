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
        Schema::create('feadminberandas', function (Blueprint $table) {
            $table->id('id_feadminberanda');
            $table->string('beranda1');
            $table->string('beranda2');
            $table->string('visi');
            $table->string('misi');
            $table->string('fokus_pekerjaan');
            $table->string('judul_pekerjaan');
            $table->string('keterangan_pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feadminberandas');
    }
};
