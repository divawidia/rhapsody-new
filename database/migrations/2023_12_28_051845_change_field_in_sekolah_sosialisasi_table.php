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
        Schema::table('sekolah_sosialisasi', function (Blueprint $table) {
            $table->string('no_hp_wa')->nullable();
            $table->string('google_maps')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sekolah_sosialisasi', function (Blueprint $table) {
            $table->dropColumn('no_hp_wa')->nullable();
            $table->dropColumn('google_maps')->nullable();
        });
    }
};
