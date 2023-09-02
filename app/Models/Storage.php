<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products(): BelongsToMany {
        return $this->belongsToMany(Product::class);
    }

    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }

    public function carts(): HasMany {
        return $this->hasMany(Cart::class);
    }
}
