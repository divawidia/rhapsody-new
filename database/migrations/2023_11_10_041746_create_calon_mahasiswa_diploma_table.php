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
        Schema::create('calon_peserta_diplomas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('email');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->string('no_hp');
            $table->string('no_hp_ortu');
            $table->string('jenis_kelamin');
            $table->string('asal_sekolah');
            $table->string('jurusan_sekolah');
            $table->integer('tahun_lulus');
            $table->string('jenis_refrensi')->nullable();
            $table->integer('jurusan_diploma_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_peserta_diplomas');
    }
};
