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
        Schema::dropIfExists('sosialisasi');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('sosialisasi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sekolah');
            $table->date('tanggal_sosialisasi');
            $table->time('jam_sosialisasi');
            $table->string('tempat_sosialisasi');
            $table->integer('jumlah_siswa');
            $table->enum('proyektor', ['Disediakan', 'Tidak Disediakan']);
            $table->enum('speaker', ['Disediakan', 'Tidak Disediakan']);
            $table->enum('status_sosialisasi', ['Selesai', 'Batal', 'Menunggu Jadwal', 'Persiapan Sosialisasi']);
            $table->enum('status_follup', ['Ada', 'Tidak ada WA']);
            $table->text('note');
            $table->integer('lama_sesi');
            $table->date('tanggal_selesai');
            $table->time('jam_selesai');
            $table->timestamps();
        });
    }
};
