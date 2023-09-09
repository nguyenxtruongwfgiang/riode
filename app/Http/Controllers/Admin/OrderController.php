<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::query()->with('orderItems')->get();

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $status = $request->status;

        try {
            $order->update(
                [
                    'status' => $status
                ]
            );

            return redirect()
                ->route('admin.orders.index')
                ->with('message', 'Order Updated Successfully');
        } catch (\Exception $exception) {
            return back()->with('message', 'Order Update Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        try {
            $order->delete();
            $order->orderItems()->delete();

            return back()->with('message', 'Order deleted successfully');
        } catch (\Exception $exception) {
            Log::error('OrderController@delete: ', [$exception->getMessage()]);

            return back()->with('message', 'Order delete failed');
        }
    }
}
