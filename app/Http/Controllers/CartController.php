<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();

        return;
    }

    public function store(Request $request, Product $product)
    {
        $attributes = $request->all();
        try {
            $request->validate(
                [
                    'color_id' => 'required',
                    'quantity' => 'required|integer'
                ]
            );

            $alreadyCart = Cart::where('user_id', auth()->user()->id)->where('product_id', $product->id)->first();
            if ($alreadyCart) {
                $alreadyCart->quantity = $alreadyCart->quantity + $request->quantity;
            } else {
                $cart = new Cart();
                $cart->user_id = auth()->user()->id;
                $cart->product_id = $product->id;
                $cart->price = $product->price;
                $cart->color_id = $request->color_id;
                $cart->quantity = $request->quantity;
                $cart->save();
            }

            return back()->with('message', 'Product Added To Cart Successfully');
        } catch (\Exception $exception) {
            Log::error('CartController@store: ' . $exception->getMessage());

            return back()->with('message', 'Product Add To Cart Failed');
        }
    }
}
