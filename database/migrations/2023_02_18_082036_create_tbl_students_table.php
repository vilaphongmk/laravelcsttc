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
            $table->string('prefix_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image_path');
            $table->string('slogan');
            $table->string('course_id');
            $table->string('date_of_birth');
            $table->string('city_id');
            $table->string('province_id');
            $table->string('village');
            $table->string('city_birth_id');
            $table->string('province_birth_id');
            $table->string('village_birth_id');
            $table->string('contact_id');
            $table->string('education_id');
            $table->string('role_type_id');
            $table->string('score_id');


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
        Schema::dropIfExists('tbl_students');
    }
};
