<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreColorRequest;
use App\Http\Requests\UpdateColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::query()->get();
        return view('admin.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColorRequest $request)
    {
        $attributes = $request->all();
        try {
            $color = new Color();

            $color->fill($attributes);

            $color->save();

            return redirect()
                ->route('admin.colors.index')
                ->with(['messgae' => 'Color Created Successfully']);
        } catch (\Exception $exception) {
            Log::error('ColorController@store: ', [$exception->getMessage()]);

            return back()->with('message', 'Color Create Failed');
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
    public function edit(Color $color)
    {
        return view('admin.colors.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorRequest $request, Color $color)
    {
        try {
            $attributes = $request->all();

            $color->fill($attributes);

            $color->save();

            return redirect()
                ->route('admin.colors.index')
                ->with(['messgae' => 'Color Updated Successfully']);
        } catch (\Exception $exception) {
            Log::error('ColorController@store: ', [$exception->getMessage()]);

            return back()->with('message', 'Color Update Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();

        return back()->with('message', 'Color Deleted Successfully');
    }
}
