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
        Schema::create('tbl_rules', function (Blueprint $table) {
            $table->id('rule_id');
            $table->string('title');
            $table->string('content');
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
        Schema::dropIfExists('tbl_rules');
    }
};
