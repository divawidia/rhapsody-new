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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->text('logo_navbar')->nullable();
            $table->text('logo_footer')->nullable();
            $table->text('logo_sidebar_lg')->nullable();
            $table->text('logo_sidebar_sm')->nullable();
            $table->string('kontak_admin');
            $table->string('email');
            $table->text('alamat');
            $table->text('google_maps');
            $table->text('foto_lpk')->nullable();
            $table->string('location_title');
            $table->text('brosur')->nullable();
            $table->text('url_facebook')->nullable();
            $table->text('url_instagram')->nullable();
            $table->text('url_tiktok')->nullable();
            $table->text('url_youtube')->nullable();
            $table->text('url_linkedin')->nullable();
            $table->text('url_twitter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
