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
        Schema::create('program_contents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('price_desc');
            $table->string('batch');
            $table->date('register_start');
            $table->date('register_end');
            $table->string('btn_text');
            $table->string('btn_url');
            $table->string('btn_icon')->nullable();
            $table->text('overview');
            $table->text('short_overview');
            $table->text('benefit_content');
            $table->integer('interest_percentage');
            $table->integer('alumnies');
            $table->string('program_icon')->nullable();
            $table->string('slug');
            $table->enum('status', [0,1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_content');
    }
};
