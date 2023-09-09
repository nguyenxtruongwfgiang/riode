<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class OrderService
{
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }


    public function getTotalAmount()
    {
        $totalAmount = 0;
        $carts = $this->cartService->getCarts();

        foreach ($carts as $cart) {
            $totalAmount += $cart->quantity * $cart->price;
        }
        if (Session::has('coupon')) {
            $totalAmount = $totalAmount - Session::get('coupon')['value'];
        }

        return $totalAmount;
    }
}
