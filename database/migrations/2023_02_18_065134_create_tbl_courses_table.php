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
        Schema::create('tbl_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subjects', 40);
            $table->integer('units', 5);
            $table->integer('terms', 5);
            $table->unsignedBigInteger('faculty_id');
            $table->string('pdf_path');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('update_by')->nullable();
            $table->timestamps();
            $table->foreign('faculty_id')->references('id')->on('tbl_faculties');
            $table->foreign('created_by')->references('id')->on('tbl_teachers');
            $table->foreign('update_by')->references('id')->on('tbl_teachers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_courses');
    }
};
