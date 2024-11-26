<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tutor;
use App\Models\Student;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->whereNot('role', 0)
            ->get();
        
        return view('admin.user-management.list', [
            'users' => $users,
        ]);
    }
    
    public function edit(User $user)
    {
        $tutor = null;
        $student = null;
        
        if ($user->role == 1) {
            $tutor = Tutor::query()
                ->where('user_id', $user->id)
                ->with('user')
                ->first();
        } else if ($user->role == 2) {
            $student = Student::query()
                ->where('user_id', $user->id)
                ->with('user')
                ->first();
        }
        
        return view('admin.user-management.edit-user', [
            'user' => $user,
            'tutor' => $tutor,
            'student' => $student,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $tutor = Tutor::findOrFail($id);
        
        $tutor->education = [
            'institution' => $request->input('institution'),
            'degree' => $request->input('degree'),
            'score' => $request->input('score'),
            'completion_year' => $request->input('completion_year'),
        ];
        
        $tutor->save();
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
