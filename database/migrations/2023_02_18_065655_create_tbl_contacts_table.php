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
        Schema::create('tbl_contacts', function (Blueprint $table) {
            // $table->id('contact_id');
            // $table->string('contact_number');
            // $table->string('contact_type');
            // $table->string('contact_index');

            // $table->string(
            //     'created_by'
            // );
            // $table->string(
            //     'update_by'
            // );
            // $table->string(
            //     'update_at'
            // );
            // $table->timestamps();
            // $table->bigIncrements('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // // $table->rememberToken();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_contacts');
    }
};
