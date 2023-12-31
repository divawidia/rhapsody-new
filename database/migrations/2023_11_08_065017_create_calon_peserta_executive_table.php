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
        Schema::create('calon_peserta_executives', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('email');
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->string('no_hp');
            $table->string('no_hp_ortu');
            $table->string('pendidikan_terakhir');
            $table->string('asal_sekolah');
            $table->string('jurusan');
            $table->longText('pengalaman_kerja');
            $table->integer('program_executive_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_peserta_executive');
    }
};
