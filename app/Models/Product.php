<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'category_id',
        'color_id',
        'quantity',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function colors() {
        return $this->belongsToMany(Color::class, 'product_colors', 'product_id', 'color_id');
    }

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function storages() {
        return $this->belongsToMany(Storage::class, 'product_has_storages', 'product_id', 'storage_id');
    }

    public function orderItems() {
        return $this->belongsToMany(OrderItem::class);
    }
}
