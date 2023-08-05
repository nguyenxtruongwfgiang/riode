<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::query()->get();
        return view('client.dashboard.index', compact('products'));
    }
}
