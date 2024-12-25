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
    Schema::create('users', function (Blueprint $table) {
        $table->id(); // This is the auto-incrementing primary key
        $table->string('name'); // Name column
        $table->string('email')->unique(); // Email column with unique constraint
        $table->string('password'); // Password column
        $table->string('number'); // Number column (You can use string if it's a phone number)
        $table->string('address'); // Address column
        $table->timestamp('email_verified_at')->nullable(); // Optional email verification timestamp
        $table->rememberToken(); // Token for "remember me" functionality
        $table->timestamps(); // Created and updated timestamps
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Properly drops the 'users' table on rollback
    }
};
