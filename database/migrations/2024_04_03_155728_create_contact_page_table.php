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
        Schema::create('contact_page', function (Blueprint $table) {
            $table->id();
            $table->string('header_title');
            $table->string('header_bg');
            $table->string('header2_title');
            $table->string('header2_subtitle');
            $table->string('jam_kerja');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->text('google_maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_page');
    }
};
