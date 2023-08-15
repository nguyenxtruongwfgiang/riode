<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::paginate(20);
        return view('client.dashboard.index', compact('products'));
    }

    public function filter() {

    }
}
