<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    const CASH_ON_DELIVERY = 'cash_on_delivery';
    const BANKING = 'banking';
    const MAPPING_PAYMENT_METHOD = [
        self::CASH_ON_DELIVERY => 'Cash on delivery',
        self::BANKING => 'Banking'
    ];

    const ORDER_PLACED = 'order_placed';
    const PROCESS = 'process';
    const DELIVERED = 'delivered';
    const CANCELED = 'canceled';
    const MAPPING_ORDER_STATUS = [
        self::ORDER_PLACED => 'Order placed',
        self::PROCESS => 'Process',
        self::DELIVERED => 'Delivered',
        self::CANCELED => 'Canceled'
    ];

    const PAID = 'paid';
    const UNPAID = 'unpaid';
    const MAPPING_PAYMENT_STATUS = [
        self::PAID => 'Paid',
        self::UNPAID => 'Unpaid'
    ];

    protected $fillable = [
        'user_id',
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

    public function getPaymentMethodNameAttribute() {
        return self::MAPPING_PAYMENT_METHOD[$this->payment_method] ?? null;
    }

    public function getOrderStatusAttribute() {
        return self::MAPPING_ORDER_STATUS[$this->status] ?? null;
    }

    public function getOrderedAtAttribute() {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->format('F d,Y | h:i A');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
