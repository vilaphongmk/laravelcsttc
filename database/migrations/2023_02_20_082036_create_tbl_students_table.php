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
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->id();
            // // $table->unsignedBigInteger('prefix_id');
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('image_path');
            // $table->string('slogan');
            // $table->unsignedBigInteger('course_id');
            // $table->string('date_of_birth');
            // $table->string('city_id');
            // $table->unsignedBigInteger('province_id');
            // $table->string('village');
            // $table->unsignedBigInteger('city_birth_id');
            // $table->unsignedBigInteger('province_birth_id');
            // $table->string('village_birth');
            // $table->unsignedBigInteger('contact_id');
            // $table->unsignedBigInteger('education_id');
            // $table->unsignedBigInteger('role_type_id');
            // $table->string('score_id');


            // $table->string(
            // 'update_at'
            // );
            $table->timestamps();
            // $table->foreign('prefix_id')->references('id')->on('tbl_prefixes');
            // $table->foreign('course_id')->references('id')->on('tbl_courses');
            // $table->foreign('province_id')->references('id')->on('tbl_provinces');
            // $table->foreign('city_id')->references('id')->on('tbl_cities');
            // $table->foreign('province_birth_id')->references('id')->on('tbl_provinces');
            // $table->foreign('city_birth_id')->references('id')->on('tbl_cities');
            // $table->foreign('contact_id')->references('id')->on('tbl_contacts');
            // $table->foreign('education_id')->references('id')->on('tbl_educations');
            // $table->foreign('role_type_id')->references('id')->on('tbl_role_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_students');
    }
};
