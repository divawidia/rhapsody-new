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
            $table->dropColumn('program_executive_id');
            $table->dropColumn('jenis_refrensi');
            $table->foreignId('program_id')->nullable()->constrained("program_contents")->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calon_peserta_executives', function (Blueprint $table) {
            $table->dropConstrainedForeignId('program_id');
            $table->integer('program_executive_id')->nullable();
            $table->string('jenis_refrensi')->nullable();
        });
    }
};
