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
        Schema::create('role_access', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_module');
            $table->unsignedBigInteger('id_permission');
            $table->unsignedTinyInteger('status')->default(0);


            $table->foreign('id_rol')->references('id')->on('rols');
            $table->foreign('id_module')->references('id')->on('modules');
            $table->foreign('id_permission')->references('id')->on('permissions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_access');
    }
};
