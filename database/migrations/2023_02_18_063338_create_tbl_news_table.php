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
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->string('image_path');
            $table->integer('views')->default(100);
            // $table->unsignedBigInteger('tbl_user_contacts_id');
            $table->timestamps();

            // $table->foreign('tbl_user_contacts_id')->references('id')->on('tbl_user_contacts');
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
