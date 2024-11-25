<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserManagementRequest;

class UserManagementController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::query()
            ->whereNot('role', 0)
            ->get();
        
        return view('admin.user-management.list', [
            'user' => $user,
            'users' => $users,
        ]);
    }
    
    public function store(UserManagementRequest $request)
    {
        
    }
    
    public function edit(User $user)
    {
        
    }
    
    public function destroy(User $user)
    {
        $user = User::find($user);
        
        if (!$user) {
            return redirect()->route('admin.user-management.index')
                ->with('error', 'User Not Found.');
        }
        
        $user->delete();
        
        return redirect()->route('admin.user-management.index')
            ->with('success', 'User Deleted Successfully.');
    }
}
