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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();  // Creates an auto-incrementing ID column
            $table->string('name');  // Name of the menu item
            $table->decimal('price');  // Price with precision (up to 999,999.99)
            $table->text('description');  // Description of the menu item
            $table->text('ingredients');  // List of ingredients
            $table->integer('discount')->default(0);  // Discount as a percentage, defaulting to 0%
            $table->timestamps();  // Adds 'created_at' and 'updated_at' columns
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
