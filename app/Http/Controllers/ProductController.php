<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->paginate(20);
        return view('client.products.index', compact('products'));
    }

    /*
    * @param $category_id
    * @GET the product list by the category id
    * return view('client.products.index')
    */

    public function getProductByCategory($category_id) {
        $products = Product::where('category_id', $category_id)->paginate(20);

        return view('client.products.index', compact('products'));
    }

    /*
    * @param Product $product
    * @GET the product detail and related product
    * return view('client.products.show')
    */

    public function show(Product $product) {
        $relatedProducts =
        Product::where('category_id', $product->category_id)
        ->where('id', '!=', $product->id)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

        return view('client.products.show', compact('product', 'relatedProducts'));
    }
}
