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
        Schema::create('reference_calon_peserta_executive', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reference_id')->constrained('references')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('peserta_id')->constrained('calon_peserta_executives')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reference_calon_peserta_executive');
    }
};
