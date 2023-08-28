<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CartComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('client.layouts.header', function ($view) {
            $totalAmount = 0;
            $cartItems = [];
            $cartItemCount = 0;
            if (auth()->check()) {
                $cartItems = Cart::where('user_id', auth()->user()->id)->get();
                $cartItemCount = count($cartItems);

                foreach ($cartItems as $cartItem) {
                    $totalAmount += $cartItem->quantity * $cartItem->price;
                }

                $view
                    ->with('cartItemCount', $cartItemCount)
                    ->with('totalAmount', $totalAmount)
                    ->with('cartItems', $cartItems);
            }

            return $view
                ->with('totalAmount', $totalAmount)
                ->with('cartItems', $cartItems)
                ->with('cartItemCount', $cartItemCount);
        });
    }
}
