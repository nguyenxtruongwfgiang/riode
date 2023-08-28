<?php

namespace App\Services;

use App\Models\Cart;

class CartService {


    public function getCarts() {

        if(auth()->check()) {
            $user_id = auth()->user()->id;

            $carts = Cart::with('product')->where('user_id', $user_id)->get();

            return $carts;
        }

        return 0;
    }

    public function getTotalAmount() {

        $cartItems = $this->getCarts();
        $totalAmount = 0;

        foreach($cartItems as $cart) {
            $totalAmount += $cart->quantity * $cart->price;
        }

        return $totalAmount;
    }

    public function getCart($product) {

        $alreadyCart = Cart::where('user_id', auth()->user()->id)->where('product_id', $product->id)->first();

        return $alreadyCart;
    }
}

?>
