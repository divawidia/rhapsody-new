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
        Schema::table('calon_peserta_executives', function (Blueprint $table) {
            $table->string('jenis_refrensi')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calon_peserta_executives', function (Blueprint $table) {
            $table->dropColumn('jenis_refrensi')->nullable()->change();
        });
    }
};
