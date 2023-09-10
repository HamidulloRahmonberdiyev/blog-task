<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');        
    }
    
    public function index()
    {
        return view('admin.roles.index')->with([
            'roles' => Role::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(StoreRoleRequest $request)
    {
        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('roles.index');
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit')->with([
            'role' => $role,
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update([
            'name' => $request->name,
        ]);

        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index');
    }
}
