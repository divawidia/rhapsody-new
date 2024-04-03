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
        Schema::create('program_career_companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_content_id');
            $table->foreign('program_content_id')->references('id')->on('program_contents')->onDelete('cascade')->onUpdate('cascade');
            $table->string('company_name');
            $table->string('company_logo');
            $table->enum('status', [0,1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_career_companies');
    }
};
