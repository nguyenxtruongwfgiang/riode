<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Services\CartService;
use App\Services\OrderService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public $cartService;
    public $orderService;

    public function __construct(CartService $cartService, OrderService $orderService)
    {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = $this->cartService->getCarts();

        $totalAmount = $this->cartService->getTotalAmount();

        $user = auth()->user();

        return view('client.cart.checkout', compact('cartItems', 'totalAmount', 'user'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $cartItems = $this->cartService->getCarts();
        $attributes = $request->all();
        try {
            $order = new Order();
            $user = User::where('id', auth()->user()->id)->first();
            $order->fill($attributes);
            $order->user_id = auth()->user()->id;
            $order->total_amount = $this->orderService->getTotalAmount();
            $order->save();
            // dd($order->payment_status);
            // $user->carts()->delete();
            if(Session::has('coupon')) {
                Session::forget('coupon');
            }

            $orderData = Order::where('id', $order->id)->first();
            //store product id, storage, color to order items table

            foreach($cartItems as $cart) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $cart->product->id;
                $orderItem->storage_id = $cart->storage->id;
                $orderItem->color_id = $cart->color->id;
                $orderItem->quantity = $cart->quantity;
                $orderItem->total_amount = $cart->amount;
                $orderItem->save();
                $cart->delete();
            }

            event(new OrderCreated($orderData));

            return view('client.cart.order-complete', compact('orderData'));
        } catch (\Exception $exception) {
            Log::error('OrderController@store: ', [$exception->getMessage()]);

            return back()->with('error', 'Order Create Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cancelOrder(Request $request, Order $order) {
        try{
            $order->update([
                'status' => 'canceled'
            ]);

            return back()->with('message', 'Order Status Updated Successfully');
        }catch(\Exception $exception) {
            Log::error('ProfileController@cancelOrder: ' [$exception->getMessage()]);

            return back()->with('message', 'Order Status Update Failed');
        }
    }
}
