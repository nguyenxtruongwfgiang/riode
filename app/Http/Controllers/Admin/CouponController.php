<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCouponRequest $request)
    {
        $attributes = $request->all();
        try {
            $coupon = new Coupon();

            $attributes['expery_date'] = Carbon::createFromFormat('Y-m-d\TH:i', $attributes['expery_date'])->format('Y-m-d H:i:s');
            $coupon->fill($attributes);

            $coupon->save();

            return redirect()
            ->route('admin.coupons.index')
            ->with([
                'message' => 'Coupon Created Successfully'
            ]);
        } catch (\Exception $exception) {
            Log::error('CouponController@store: ', [$exception->getMessage()]);

            return back()->with('message', 'Coupon Create Failed');
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
    public function edit(Coupon $coupon)
    {
        return view('admin.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $attributes = $request->all();
        try {
            $coupon->fill($attributes);

            $coupon->save();

            return redirect()
            ->route('admin.coupons.index')
            ->with([
                'message' => 'Coupon Updated Successfully'
            ]);
        } catch (\Exception $exception) {
            Log::error('CouponController@update: ' [$exception->getMessage()]);

            return back()->with('message', 'Coupon Update Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        return back()->with('message', 'Coupon Deleted Successfully');
    }
}
