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
            $table->id('teacher_id');
            $table->string('prefix_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image_path');
            $table->string('slogan');
            $table->string('position_main');
            $table->string('user_position_id');
            $table->string('education_id');
            $table->string('contact_id');
            $table->string('teacher_department_id');
            $table->string('teacher_courses_id');
            $table->string('role_type_id');
            $table->string('action_log_id');
            $table->string(
                'created_by'
            );
            $table->string(
                'update_by'
            );
            $table->string(
                'update_at'
            );
            $table->timestamps();
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
