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
        Schema::create('home_page', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img');
            $table->string('banner_title');
            $table->string('banner_subtitle');
            $table->string('daftar_btn_text');
            $table->string('daftar_btn_url');
            $table->enum('section2_status', [0,1]);
            $table->string('section2_title');
            $table->string('section2_subtitle');
            $table->text('section2_body');
            $table->string('section2_img1');
            $table->string('section2_img2');
            $table->string('section2_img3');
            $table->string('section2_img4');
            $table->enum('program_section_status', [0,1]);
            $table->string('program_section_title');
            $table->string('program_section_subtitle');
            $table->enum('fasilitas_section_status', [0,1]);
            $table->string('fasilitas_section_title');
            $table->string('fasilitas_section_subtitle');
            $table->string('fasilitas_section_img');
            $table->string('fasilitas_section_title2');
            $table->string('fasilitas_section_subtitle2');
            $table->enum('victory_section_status', [0,1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page');
    }
};
