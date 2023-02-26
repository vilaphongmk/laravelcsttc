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
            $table->string('news')->nullable();
            $table->string('course')->nullable();
            $table->string('address')->nullable();
            $table->string('slide')->nullable();
            $table->string('computer_room')->nullable();
            $table->string('document')->nullable();
            $table->string('about')->nullable();
            $table->string('faculty')->nullable();
            $table->string('position')->nullable();
            $table->string('teacher')->nullable();
            $table->string('student')->nullable();
            $table->string('admin')->nullable();
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
