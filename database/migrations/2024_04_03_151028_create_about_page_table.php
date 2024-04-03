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
        Schema::create('about_page', function (Blueprint $table) {
            $table->id();
            $table->string('header_title');
            $table->string('header_bg');
            $table->enum('section2_status', [0,1]);
            $table->string('section2_title');
            $table->string('section2_subtitle');
            $table->text('section2_body');
            $table->string('section2_img');
            $table->enum('section3_status', [0,1]);
            $table->string('section3_title');
            $table->string('section3_subtitle');
            $table->text('section3_body');
            $table->string('section3_img');
            $table->enum('visi_misi_section_status', [0,1]);
            $table->text('visi');
            $table->text('misi');
            $table->enum('section4_status', [0,1]);
            $table->text('section4_body');
            $table->string('section4_img');
            $table->enum('whyrhapsody_section_status', [0,1]);
            $table->string('whyrhapsody_section_title');
            $table->string('whyrhapsody_section_subtitle');
            $table->string('whyrhapsody_section_card1_title');
            $table->text('whyrhapsody_section_card1_body');
            $table->string('whyrhapsody_section_card1_icon');
            $table->string('whyrhapsody_section_card2_title');
            $table->text('whyrhapsody_section_card2_body');
            $table->string('whyrhapsody_section_card2_icon');
            $table->string('whyrhapsody_section_card3_title');
            $table->text('whyrhapsody_section_card3_body');
            $table->string('whyrhapsody_section_card3_icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_page');
    }
};
