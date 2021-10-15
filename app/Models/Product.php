<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'status',
        'price',
        'sale_price',
        'description',
        'list_image',
    ];

    public function FunctionName()
    {
        # code...
    }

    use HasFactory;
}