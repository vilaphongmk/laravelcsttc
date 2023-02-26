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
        Schema::create('tbl_teacher_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('courses_id');
            $table->timestamps();
            $table->foreign('courses_id')->references('id')->on('tbl_courses');
            $table->foreign('user_id')->references('id')->on('tbl_users');
            $table->primary(['user_id', 'courses_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_teacher_courses');
    }
};
