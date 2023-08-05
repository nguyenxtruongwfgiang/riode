<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::query()->get()->groupBy('group');
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $attributes = $request->all();
        try {
            $user = new User();
            $attributes['password'] = Hash::make($request->password);

            $user->fill($attributes);
            $user->save();
            $user->roles()->attach($attributes['role_ids']);

            return redirect()
                ->route('users.index')
                ->with(['message' => 'User Created Successfully']);
        } catch (\Exception $exception) {
            Log::error('UserController@store', [$exception->getMessage()]);

            return back()
            ->with('status', Response::HTTP_BAD_REQUEST)
            ->with('message', 'Create Failed');
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
        $user = User::findOrFail($id)->load('roles');
        $roles = Role::query()->get()->groupBy('group');

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $attributes = $request->except('password');
        try {
            if($request->password) {
                $attributes['password'] = Hash::make($request->password);
            }
        
            $user->fill($attributes);
            $user->save();
            $user->roles()->sync($attributes['role_ids']);

            return redirect()
                ->route('users.index')
                ->with(['message' => 'User Updated Successfully']);
        } catch (\Exception $exception) {
            Log::error('UserController@update', [$exception->getMessage()]);

            return back()
            ->with('status', Response::HTTP_BAD_REQUEST)
            ->with(['message' => 'Update Failed']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()
            ->with('message', 'User Deleted Successfully');
    }
}
