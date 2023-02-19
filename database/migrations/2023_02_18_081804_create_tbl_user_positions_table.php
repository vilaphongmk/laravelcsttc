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
        Schema::create('tbl_user_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('position_type_id');
            $table->string('user_id');
            $table->integer('user_positions_index', 5);
            $table->timestamps();
            $table->foreign('position_type_id')->references('id')->on('tbl_position_type');
            $table->foreign('user_id')->references('id')->on('tbl_user_contacts');
            $table->foreign('department_id')->references('id')->on('tbl_departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_user_positions');
    }
};
