<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view user', ['only' => ['index']]);
        $this->middleware('permission:create user', ['only' => ['create', 'store']]);
        $this->middleware('permission:update user', ['only' => ['update', 'edit']]);
        $this->middleware('permission:delete user', ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = User::query()->latest()->get();
        return view('role-permission.users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('role-permission.users.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
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

        return redirect('/users')->with('status', 'User Created Successfully with Roles');
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

        return redirect('/users')->with('status', 'User Updated Successfully with Roles');
    }

    public function destroy($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();

        return redirect('/users')->with('status', 'User Deleted Successfully');
    }
}
