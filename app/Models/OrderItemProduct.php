<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItemProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'storage_id',
        'color_id',
        'quantity',
        'total_amount'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function products() {
        return $this->belongsTo(Product::class);
    }

    public function color() {
        return $this->belongsTo(Color::class);
    }

    public function storage() {
        return $this->belongsTo(Storage::class);
    }
}
