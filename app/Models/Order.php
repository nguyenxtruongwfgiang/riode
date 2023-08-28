<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'color_id',
        'shipping_id',
        'quantity',
        'total_amount',
        'address',
        'phone',
        'payment_status',
        'payment_method',
        'status'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function shipping() {
        return $this->belongsTo(Shipping::class);
    }
}
