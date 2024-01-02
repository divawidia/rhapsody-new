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
            $table->enum('status_follup', ['Dibalas', 'Hanya Dibaca', 'Sudah Dikonfirmasi'])->nullable()->change();
            $table->integer('lama_sesi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sosialisasi', function (Blueprint $table) {
            $table->dropColumn('status_follup');
            $table->dropColumn('lama_sesi');
        });
    }
};
