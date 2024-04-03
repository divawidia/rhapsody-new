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
        Schema::create('facility_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facility_page_id');
            $table->foreign('facility_page_id')->references('id')->on('facility_page')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('home_page_id');
            $table->foreign('home_page_id')->references('id')->on('home_page')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->string('subtitle');
            $table->text('short_description');
            $table->text('long_decription');
            $table->string('icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_content');
    }
};
