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
        Schema::create('tbl_cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city_name_la', 50);
            $table->string('city_name_en', 50)->nullable();
            $table->unsignedBigInteger('update_by')->nullable();
            $table->timestamps();
            $table->foreign('update_by')->references('id')->on('tbl_teachers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_cities');
    }
};
