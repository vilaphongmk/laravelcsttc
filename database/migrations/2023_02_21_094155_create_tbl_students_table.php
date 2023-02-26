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
            $table->unsignedBigInteger('users_id');
            $table->string('students_serial')->nullable();
            $table->string('student_status')->default('nonactive')->comment('active=learning, finished=finished, drop= pause');
            $table->datetime('drop_year')->nullable();
            $table->string('student_status_verify')->default('nonactive')->comment('verify from admin');
            $table->string('student_serial')->nullable();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('tbl_users')->onDelete('cascade');
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
