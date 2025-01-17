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
        Schema::dropIfExists('siswa_sma_smks');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('siswa_sma_smks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('no_hp');
            $table->string('asal_sekolah');
            $table->string('jurusan');
            $table->longText('program_diminati');
            $table->integer('id_sosialisasi')->nullable();
            $table->integer('id_sekolah')->nullable();
            $table->timestamps();
        });
    }
};
