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
        Schema::dropIfExists('role_has_permissions');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::create('role_has_permissions', function (Blueprint $table) {
//            $table->id();
//            $table->foreignId('permission_id')->constrained('permissions');
//            $table->foreignId('role_id')->constrained('roles');
//            $table->timestamps();
//        });
    }
};
