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
        Schema::create('victory_section', function (Blueprint $table) {
            $table->id();
            $table->string('victory_section_title');
            $table->text('victory_section_body');
            $table->string('victory_section_btn_text');
            $table->string('victory_section_btn_icon');
            $table->string('victory_section_btn_url');
            $table->string('victory_section_bg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('victory_section');
    }
};
