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
            $table->id('vision_id');
            $table->string('title');
            $table->string('image_path');
            $table->string('content');
            $table->string('vision_index');
            $table->string(
                'created_by'
            );
            $table->string(
                'update_by'
            );
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
        Schema::dropIfExists('tbl_visions');
    }
};
