<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fileable=[
        'name',
        'des',
        'size',
        'color',
        'product_code',
        'cost_price',
        'sale_price',
    ];
}
