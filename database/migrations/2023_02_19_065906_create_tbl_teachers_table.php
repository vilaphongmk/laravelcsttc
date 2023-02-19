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
        Schema::create('tbl_teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prefix_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('image_path');
            $table->string('slogan');
            $table->string('position_main', 100);
            $table->unsignedBigInteger('user_position_id');
            $table->unsignedBigInteger('education_id');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('teacher_department_id');
            $table->unsignedBigInteger('teacher_courses_id');
            $table->unsignedBigInteger('role_type_id');
            $table->unsignedBigInteger('action_log_id');
            $table->unsignedBigInteger('update_by')->nullable();
            $table->timestamps();
            $table->foreign('prefix_id')->references('id')->on('tbl_prefixes');
            $table->foreign('user_position_id')->references('id')->on('tbl_user_positions');
            $table->foreign('education_id')->references('id')->on('tbl_educations');
            $table->foreign('contact_id')->references('id')->on('tbl_user_contacts');
            $table->foreign('teacher_department_id')->references('id')->on('tbl_teacher_departments');
            $table->foreign('teacher_courses_id')->references('id')->on('tbl_teacher_courses');
            $table->foreign('role_type_id')->references('id')->on('tbl_role_types');
            $table->foreign('action_log_id')->references('id')->on('tbl_action_logs');
            $table->foreign('update_by')->references('id')->on('tbl_teachers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_teachers');
    }
};
