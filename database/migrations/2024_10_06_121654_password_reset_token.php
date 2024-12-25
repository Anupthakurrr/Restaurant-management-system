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
        Schema::create('password_reset_token', function (Blueprint $table) {
            $table->string('email')->index();  // Email field, indexed for faster lookups
            $table->string('token');           // Token field for reset link
            $table->timestamp('created_at')->nullable();  // Timestamp for when the reset request was created
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
