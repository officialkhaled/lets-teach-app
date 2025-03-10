<?php

namespace App\Http\Controllers\RolePermission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view permission', ['only' => ['index']]);
        $this->middleware('permission:create permission', ['only' => ['create', 'store']]);
        $this->middleware('permission:update permission', ['only' => ['update', 'edit']]);
        $this->middleware('permission:delete permission', ['only' => ['destroy']]);
    }

    public function index()
    {
        $permissions = Permission::query()->latest()->get();

        return view('role-permission.permissions.index', [
            'permissions' => $permissions
        ]);
    }

    public function create()
    {
        return view('role-permission.permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]);

        Permission::create([
            'name' => $request->name
        ]);

        return redirect('admin/settings/permissions')->with('success', 'Permission Created Successfully');
    }

    public function edit(Permission $permission)
    {
        return view('role-permission.permissions.edit', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,' . $permission->id
            ]
        ]);

        $permission->update([
            'name' => $request->name
        ]);

        return redirect('admin/settings/permissions')->with('success', 'Permission Updated Successfully');
    }

    public function destroy($permissionId)
    {
        $permission = Permission::find($permissionId);
        $permission->delete();

        return redirect('admin/settings/permissions')->with('success', 'Permission Deleted Successfully');
    }
}
