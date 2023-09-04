<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipping_id',
        'quantity',
        'total_amount',
        'address',
        'phone',
        'payment_status',
        'payment_method',
        'status',
        'inquiry_details'
    ];

    public function orderItems(): HasMany {
        return $this->hasMany(OrderItem::class);
    }
}
