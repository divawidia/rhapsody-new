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
        Schema::dropIfExists('roles');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::create('role_has_permissions', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('guard_name');
//            $table->timestamps();
//        });
    }
};