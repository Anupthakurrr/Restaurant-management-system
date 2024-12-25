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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing id field
            $table->string('name'); // Name of the customer
            $table->string('contact'); // Contact number
            $table->string('email')->unique(); // Email address, set as unique
            $table->text('delivery_address'); // Delivery address field
            $table->timestamps(); // Automatically creates 'created_at' and 'updated_at' fields
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
