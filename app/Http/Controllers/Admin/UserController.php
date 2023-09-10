<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');        
    }
    
    public function index()
    {
        return view('admin.users.index')->with([
            'users' => User::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.users.create')->with([
            'roles' => Role::all(),
        ]);
    }

    public function store(StoreUserRequest $request)
    {
        User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
