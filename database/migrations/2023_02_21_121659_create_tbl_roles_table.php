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
        Schema::create('tbl_roles', function (Blueprint $table) {
            $table->id();
            $table->boolean('news')->nullable();
            $table->boolean('course')->nullable();
            $table->boolean('address')->nullable();
            $table->boolean('slide')->nullable();
            $table->boolean('computer_room')->nullable();
            $table->boolean('document')->nullable();
            $table->boolean('about')->nullable();
            $table->boolean('faculty')->nullable();
            $table->boolean('position')->nullable();
            $table->boolean('teacher')->nullable();
            $table->boolean('student')->nullable();
            $table->boolean('admin')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('tbl_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_roles');
    }
};
