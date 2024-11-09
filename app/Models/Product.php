<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
        
    ];



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->product_id = self::generateProductId($product->name);
        });
    }

       private static function generateProductId($name)
    {
        do {
            $randomNumber = rand(100, 999);
            $productNameSlug = Str::slug($name);
            $productId = $productNameSlug . '-' . $randomNumber;
        } while (self::where('product_id', $productId)->exists());

        return $productId;
    }


}
