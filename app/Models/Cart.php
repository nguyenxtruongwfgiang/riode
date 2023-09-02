<?php

namespace App\Models;

use App\Services\CartService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'color_id',
        'price',
        'quantity',
        'storage_id'
    ];

    public function getAmountAttribute() {
        return $this->quantity * $this->price;
    }

    public function color() {
        return $this->belongsTo(Color::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function storage() {
        return $this->belongsTo(Storage::class);
    }

    public function getTotalAmountAttribute() {
        return (new CartService)->getTotalAmount();
    }

    public function getCountCartAttribute() {
        return (new CartService)->countCart();
    }

}
