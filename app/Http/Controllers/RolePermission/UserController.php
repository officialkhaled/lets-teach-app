<?php

namespace App\Http\Controllers\RolePermission;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:View User', ['only' => ['index']]);
        $this->middleware('permission:Create User', ['only' => ['create', 'store']]);
        $this->middleware('permission:Update User', ['only' => ['update', 'edit']]);
        $this->middleware('permission:Delete User', ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = User::query()->latest()->get();

        return view('role-permission.users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::query()->orderBy('id', 'ASC')->pluck('name', 'name')->all();

        return view('role-permission.users.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|string|min:5|max:20',
                'roles' => 'required'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->syncRoles($request->roles);

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addSuccess('User Created Successfully with Roles.');

            return redirect('admin/settings/users');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function edit(User $user)
    {
        $roles = Role::pluck('name', 'name')->all();
        $userRoles = $user->roles->pluck('name', 'name')->all();

        return view('role-permission.users.edit', [
            'user' => $user,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);
    }

    public function update(Request $request, User $user)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'password' => 'nullable|string|min:5|max:20',
                'roles' => 'required'
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
            ];

            if (!empty($request->password)) {
                $data += [
                    'password' => Hash::make($request->password),
                ];
            }

            $user->update($data);
            $user->syncRoles($request->roles);

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addSuccess('User Updated Successfully with Roles.');

            return redirect('admin/settings/users');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function destroy($userId)
    {
        try {
            $user = User::findOrFail($userId);
            $user->delete();

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addSuccess('User Deleted Successfully.');

            return redirect('admin/settings/users');
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
