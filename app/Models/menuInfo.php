<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuInfo extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = [
    'product_pic',
    'name',
    'price',
    'ingredients',
    'discount',    // Discount applied
    'quantity',    // Product quantity
    'status',
    'rating',
    ];

}
