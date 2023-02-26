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
        Schema::create('tbl_visions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image_path');
            $table->longText('content');
            $table->integer('vision_index')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('tbl_users');
            $table->foreign('updated_by')->references('id')->on('tbl_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_visions');
    }
};
