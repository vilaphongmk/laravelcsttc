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
        Schema::create('tbl_user_foreigns', function (Blueprint $table) {

            $table->unsignedBigInteger('user_position_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_type_id');
            $table->timestamps();
            $table->foreign('user_position_id')->references('id')->on('tbl_user_positions');
            $table->foreign('role_type_id')->references('id')->on('tbl_role_types');
            $table->foreign('user_id')->references('id')->on('tbl_users');
            $table->primary(['user_position_id', 'role_type_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_user_foreigns');
    }
};
