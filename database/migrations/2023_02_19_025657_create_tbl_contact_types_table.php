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
        Schema::create('tbl_contact_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_type_name');
            $table->unsignedBigInteger('tbl_user_contacts_id')->renameColumn('tbl_user_contacts_id', 'action_by');
            $table->timestamps();

            $table->foreign('tbl_user_contacts_id')->references('id')->on('tbl_user_contacts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_contact_types');
    }
};
