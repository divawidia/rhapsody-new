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
        Schema::table('sosialisasi', function (Blueprint $table) {
            $table->enum('proyektor', ['Disediakan', 'Tidak Disediakan'])->default('Tidak Disediakan')->change();
            $table->enum('speaker', ['Disediakan', 'Tidak Disediakan'])->default('Tidak Disediakan')->change();
            $table->text('note')->nullable()->change();
            $table->string('tempat_sosialisasi')->nullable()->change();
            $table->integer('jumlah_siswa')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sosialisasi', function (Blueprint $table) {
            $table->enum('proyektor', ['Disediakan', 'Tidak Disediakan'])->change();
            $table->enum('speaker', ['Disediakan', 'Tidak Disediakan'])->change();
            $table->text('note')->change();
            $table->string('tempat_sosialisasi')->change();
            $table->integer('jumlah_siswa')->change();
        });
    }
};
