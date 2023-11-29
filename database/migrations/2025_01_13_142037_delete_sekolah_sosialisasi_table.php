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
        Schema::dropIfExists('sekolah_sosialisasi');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('sekolah_sosialisasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('no_hp_wa');
            $table->string('google_maps');
            $table->string('no_hp_wa')->nullable()->change();
            $table->string('google_maps')->nullable()->change();
            $table->timestamps();
        });
    }
};
