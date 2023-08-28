<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public $product;
    public $cartService;

    public function __construct(Product $product, CartService $cartService)
    {
        $this->product = $product;
        $this->cartService = $cartService;
    }

    public function index()
    {
        $carts = $this->cartService->getCarts();

        $totalAmount = $this->cartService->getTotalAmount();

        return view('client.cart.index', compact('carts', 'totalAmount'));
    }

    public function store(Request $request, Product $product)
    {
        $attributes = $request->all();
        try {
            $request->validate(
                [
                    'color_id' => 'required',
                    'quantity' => 'required|integer|min:1'
                ]
            );

            $alreadyCart = Cart::where('user_id', auth()->user()->id)->where('product_id', $product->id)->first();
            if ($alreadyCart->color->id == $request->color_id) {
                $alreadyCart->quantity = $alreadyCart->quantity + $request->quantity;

                if($alreadyCart->product->quantity < $alreadyCart->quantity || $alreadyCart->product->quantity < 1) {
                    return back()->with('message', 'Product Out Of Stock');
                }
                $alreadyCart->save();
            } else {
                $cart = new Cart();
                $cart->user_id = auth()->user()->id;
                $cart->product_id = $product->id;
                $cart->price = $product->price;
                $cart->color_id = $request->color_id;
                $cart->quantity = $request->quantity;

                if($cart->product->quantity < $cart->quantity || $cart->product->quantity < 1) {
                    return back()->with('message', 'Product Out Of Stock');
                }

                $cart->save();
            }

            return back()->with('message', 'Product Added To Cart Successfully');
        } catch (\Exception $exception) {
            Log::error('CartController@store: ' . $exception->getMessage());

            return back()->with('message', 'Product Add To Cart Failed');
        }
    }

    public function destroy(Cart $cart) {
        try {
            $cart->delete();

            return back()->with('message', 'Cart item deleted successfully');
        } catch(\Exception $exception) {
            Log::error('CartController@destroy: ', [$exception->getMessage()]);

            return back()->with('message', 'Cart item delete failed');
        }
    }

    public function update(Request $request, Cart $cart) {
        $attributes = $request->all();
        try{
            if($request->quantity < 1) {
                $cart->delete();
            } else {
                $cart->update($attributes);
            }

            return response()->json([
                'data' => $cart
            ], Response::HTTP_OK);
        } catch (\Exception $exception) {
            Log::error('CartController@store: ', [$exception->getMessage()]);

            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
