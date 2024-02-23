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
        Schema::create('fe_adminberandas', function (Blueprint $table) {
            $table->id('id');
            $table->string('beranda1');
            $table->string('beranda2');
            $table->string('visi');
            $table->string('misi');
            $table->text('fokus_pekerjaan');
            $table->text('tentang_kami');
            $table->text('layanan_kami');
            $table->text('donasi');
            $table->text('project_kami');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fe_adminberandas');
    }
};
