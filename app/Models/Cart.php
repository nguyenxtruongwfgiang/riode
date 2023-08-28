<?php

namespace App\Models;

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
        'quantity'
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

}
