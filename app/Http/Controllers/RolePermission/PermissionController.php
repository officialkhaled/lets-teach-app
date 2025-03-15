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
        try {
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

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Permission Created Successfully.');

            return redirect('admin/settings/permissions');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function edit(Permission $permission)
    {
        return view('role-permission.permissions.edit', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        try {
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

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Permission Updated Successfully.');

            return redirect('admin/settings/permissions');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function destroy($permissionId)
    {
        try {
            $permission = Permission::find($permissionId);
            $permission->delete();

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Permission Deleted Successfully.');

            return redirect('admin/settings/permissions');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }
}
