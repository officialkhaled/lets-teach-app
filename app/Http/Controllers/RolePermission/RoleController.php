<?php

namespace App\Http\Controllers\RolePermission;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view role', ['only' => ['index']]);
        $this->middleware('permission:create role', ['only' => ['create', 'store', 'addPermissionToRole', 'givePermissionToRole']]);
        $this->middleware('permission:update role', ['only' => ['update', 'edit']]);
        $this->middleware('permission:delete role', ['only' => ['destroy']]);
    }

    public function index()
    {
        $roles = Role::query()->latest()->get();

        return view('role-permission.roles.index', [
            'roles' => $roles
        ]);
    }

    public function create()
    {
        return view('role-permission.roles.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => [
                    'required',
                    'string',
                    'unique:roles,name'
                ]
            ]);

            Role::create([
                'name' => $request->name
            ]);

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Role Created Successfully.');

            return redirect('admin/settings/roles');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function edit(Role $role)
    {
        return view('role-permission.roles.edit', [
            'role' => $role
        ]);
    }

    public function update(Request $request, Role $role)
    {
        try {
            $request->validate([
                'name' => [
                    'required',
                    'string',
                    'unique:roles,name,' . $role->id
                ]
            ]);

            $role->update([
                'name' => $request->name
            ]);

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Role Updated Successfully.');

            return redirect('admin/settings/roles');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function destroy($roleId)
    {
        try {
            $role = Role::find($roleId);
            $role->delete();

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Role Deleted Successfully.');

            return redirect('admin/settings/roles');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function addPermissionToRole($roleId)
    {
        $permissions = Permission::get();
        $role = Role::findOrFail($roleId);

        $rolePermissions = DB::table('role_has_permissions')
            ->where('role_has_permissions.role_id', $role->id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('role-permission.roles.add-permissions', [
            'role' => $role,
            'permissions' => $permissions,
            'rolePermissions' => $rolePermissions
        ]);
    }

    public function givePermissionToRole(Request $request, $roleId)
    {
        try {
            $request->validate([
                'permission' => 'required'
            ]);

            $role = Role::findOrFail($roleId);
            $role->syncPermissions($request->permission);

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Permissions Added to Role.');

            return redirect()->back();
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
