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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prefix', 10);
            $table->string('user_type')->default('Student')->comment('Student/Teacher');
            $table->string('login_status')->default('on')->comment('on or off');
            $table->unsignedBigInteger('tbl_students_id')->nullable();
            $table->string('image_path')->nullable();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->dateTime('date_of_birth');
            $table->string('slogan')->nullable();
            $table->string('village_present', 50);
            $table->string('village_birth', 50);
            $table->unsignedBigInteger('city_present_id');
            $table->unsignedBigInteger('province_present_id');
            $table->unsignedBigInteger('city_birth_id');
            $table->unsignedBigInteger('province_birth_id');
            $table->unsignedBigInteger('department_type_id')->nullable();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('whatsapp', 15)->nullable();
            $table->string('telephone1', 15)->nullable();
            $table->string('telephone2', 15)->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('line', 15)->nullable();
            $table->string('youtube', 50)->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('province_present_id')->references('id')->on('tbl_provinces');
            $table->foreign('city_present_id')->references('id')->on('tbl_cities');
            $table->foreign('province_birth_id')->references('id')->on('tbl_provinces');
            $table->foreign('city_birth_id')->references('id')->on('tbl_cities');
            $table->foreign('department_type_id')->references('id')->on('tbl_department_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_users');
    }
};
