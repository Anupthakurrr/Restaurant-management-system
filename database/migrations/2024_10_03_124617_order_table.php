<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Product name
            $table->float('price'); // Product price without restriction
            $table->text('description'); // Product description
            $table->float('discount')->nullable(); // Discount without restriction, optional
            $table->integer('quantity'); // Available quantity
            $table->string('status'); // Product status as a string
            $table->timestamps(); // Created and updated at timestamps
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
