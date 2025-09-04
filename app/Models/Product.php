<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'image'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
