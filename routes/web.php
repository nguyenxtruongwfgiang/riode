<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
include(base_path('routes/auth.php'));
include(base_path('routes/admin.php'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::as('client.')->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('dashboard');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/categories/{category_id}/products', [ProductController::class, 'getProductByCategory'])->name('products.category');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('products.detail');
// });
Route::middleware('auth')->group(function() {

    Route::post('cart/add/{product}', [CartController::class, 'store'])->name('cart.add');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('checkout', [OrderController::class, 'index'])->name('checkout.index');
    Route::get('cart/delete/{cart}', [CartController::class, 'destroy'])->name('cart.delete');
    Route::post('cart/update{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::post('cart/apply-coupon', [CartController::class, 'applyCoupon'])->name('coupon.apply');
    Route::get('checkout', [OrderController::class, 'index'])->name('checkout.index');
});
