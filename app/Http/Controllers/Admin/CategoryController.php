<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $attributes = $request->all();

        try {
            $category = new Category();

            $category->fill($attributes);

            $category->save();

            return redirect()
                ->route('admin.categories.index')
                ->with(['message' => 'Category Created Successfully']);
        } catch (\Exception $exception) {
            Log::error('CategoryController@store', [$exception->getMessage()]);

            return back()
                ->with('message', 'Category Create Failed');
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
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $attributes = $request->all();

        try {
            $category->fill($attributes);

            $category->save();

            return redirect()
                ->route('admin.categories.index')
                ->with(['message' => 'Category Updated Successfully']);
        } catch (\Exception $exception) {
            Log::error('CategoryController@store', [$exception->getMessage()]);

            return back()
                ->with('message', 'Category Update Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return back()
            ->with('message', 'Category Deleted Successfully');
    }
}
