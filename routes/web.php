<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


include(base_path('routes/auth.php'));
include(base_path('routes/admin.php'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('cart/add/{product}', [CartController::class, 'store'])->name('cart.add');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('checkout', [OrderController::class, 'index'])->name('checkout.index');
    Route::get('cart/delete/{cart}', [CartController::class, 'destroy'])->name('cart.delete');
    Route::post('cart/update{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::post('cart/apply-coupon', [CartController::class, 'applyCoupon'])->name('coupon.apply');
    Route::get('checkout', [OrderController::class, 'index'])->name('checkout.index');
    Route::post('order/store', [OrderController::class, 'store'])->name('order.store');
    Route::post('order/cancel/{order}', [OrderController::class, 'cancelOrder'])->name('order.cancel');
});


Route::get('/', [ProductController::class, 'index'])->name('dashboard');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/categories/{category_id}/products', [ProductController::class, 'getProductByCategory'])->name('products.category');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.detail');
Route::get('mail', function() {
    return view('mails.send-confirmation-order-mail');
});
