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
        Schema::create('tbl_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('content');
            $table->string('image_path');
            $table->integer('views')->default(100);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('update_by')->nullable();
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('tbl_users');
            $table->foreign('update_by')->references('id')->on('tbl_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_news');
    }
};
