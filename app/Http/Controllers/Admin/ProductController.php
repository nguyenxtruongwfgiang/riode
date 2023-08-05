<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::query()->get();
        $categories = Category::query()->get();
        return view('admin.products.create', compact('categories', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $attributes = $request->all();
        try {
            $product = new Product();

            $product->fill($attributes);

            if ($request->hasFile('image')) {
                $product->image = upload_file('students', $request->file('image'));
            }

            $product->save();
            $product->colors()->attach($attributes['colors']);

            return redirect()->route('products.index')
                ->with(['message' => 'Product Created Successfully']);
        } catch (\Exception $exception) {
            Log::error('ProductController@store: ', [$exception->getMessage()]);

            return back()
                ->with('message', 'Product Create Failed');
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
        $product = Product::with('colors')->findOrFail($id);
        $colors = Color::query()->get();
        $categories = Category::query()->get();
        return view('admin.products.edit', compact('product', 'colors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $attributes = $request->except('image');
        try {
            $product->fill($attributes);
            $oldProductImage = $product->image;

            if ($request->hasFile('image')) {
                $product->image = upload_file('students', $request->file('image'));
            }

            $product->save();
            delete_file($oldProductImage);
            $product->colors()->sync($attributes['colors']);

            return redirect()->route('products.index')
                ->with(['message' => 'Product Updated Successfully']);
        } catch (\Exception $exception) {
            Log::error('ProductController@update: ', [$exception->getMessage()]);

            return back()
                ->with('message', 'Product Update Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()
            ->with('message', 'Product Deleted Successfully');
    }
}
