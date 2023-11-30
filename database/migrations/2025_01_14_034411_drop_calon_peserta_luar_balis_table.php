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
        Schema::dropIfExists('calon_peserta_luar_balis');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('calon_peserta_luar_balis', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_orang');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('program_diminati');
            $table->text('alasan');
            $table->timestamps();
        });
    }
};
