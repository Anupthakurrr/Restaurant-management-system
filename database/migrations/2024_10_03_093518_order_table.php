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
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // Automatically creates an auto-incrementing id field
        $table->string('name'); // Name of the item or customer
        $table->decimal('price'); // Price column with precision (8 digits total, 2 decimal places)
        $table->text('description'); // Description of the item
        $table->decimal('discount'); // Discount percentage (optional)
        $table->integer('quantity'); // Quantity of the item or stock
        $table->string('status'); // Status field with default value 'available'
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
