<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::as('client.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
