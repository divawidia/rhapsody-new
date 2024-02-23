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
        Schema::create('reference_calon_peserta_diploma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reference_id');
            $table->unsignedBigInteger('calon_peserta_diploma_id');
            $table->foreign('reference_id')->references('id')->on('references')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('calon_peserta_diploma_id')->references('id')->on('calon_peserta_diplomas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reference_calon_peserta_diploma');
    }
};
