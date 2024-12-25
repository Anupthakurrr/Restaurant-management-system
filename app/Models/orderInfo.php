<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderInfo extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'image',
        'name',        // Product name
        'price',       // Product price
        'description', // Product description
        'discount',    // Discount applied
        'quantity',    // Product quantity
        'status',      // Status of the product
    ];
}
