<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Products';

    protected $primaryKey = 'Product_Id';
    
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'stock',
    ];
}