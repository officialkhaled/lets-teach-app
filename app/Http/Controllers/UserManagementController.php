<?php

namespace App\Http\Controllers;

use App\Models\Tag;
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
            ->latest()
            ->get();
        
        return view('admin.users-management.list', [
            'users' => $users,
        ]);
    }
    
    public function edit(User $user)
    {
        $tutor = null;
        $student = null;
        $selectedGrades = [];
        
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        if ($user->role == 1) {
            $tutor = Tutor::query()
                ->where('user_id', $user->id)
                ->with('user')
                ->first();
            
            $selectedSubjects = $tutor->subjects ?? [];
            $selectedGrades = $tutor->grades ?? [];
        } else {
            $student = Student::query()
                ->where('user_id', $user->id)
                ->with('user')
                ->first();
            
            $selectedSubjects = $student->subjects ?? [];
        }
        
        return view('admin.users-management.edit-user', [
            'user' => $user,
            'tutor' => $tutor,
            'student' => $student,
            'tags' => $tags,
            'selectedSubjects' => $selectedSubjects,
            'selectedGrades' => $selectedGrades,
        ]);
    }
    
    public function update(Request $request, User $user)
    {
        if ($user->role == 1) {
            $tutor = Tutor::where('user_id', $user->id)->first();
            $tutor->update($request->except(['education', 'subjects', 'grades']));
            
            $tutor->education = [
                'institution' => $request->input('institution'),
                'degree' => $request->input('degree'),
                'score' => $request->input('score'),
                'completion_year' => $request->input('completion_year'),
            ];
            
            $tutor->subjects = $request->input('subjects');
            $tutor->grades = $request->input('grades');
            
            $tutor->save();
            
            return redirect()->route('admin.user-management.index')->with('success', 'Tutor Updated Successfully.');
        } else {
            $student = Student::where('user_id', $user->id)->first();
            $student->update($request->except(['subjects']));
            $student->subjects = $request->input('subjects');
            
            $student->save();
            
            return redirect()->route('admin.user-management.index')->with('success', 'Student Updated Successfully');
        }
    }
    
    public function destroy(User $user)
    {
        if ($user->role == 1) {
            $tutor = Tutor::where('user_id', $user->id)->first();
            $tutor?->delete();
            $user->delete();
            
            return redirect()->route('admin.user-management.index')->with('success', 'Tutor Deleted Successfully.');
        } elseif ($user->role == 2) {
            $student = Student::where('user_id', $user->id)->first();
            $student?->delete();
            $user->delete();
            
            return redirect()->route('admin.user-management.index')->with('success', 'Student Deleted Successfully.');
        } else {
            return redirect()->route('admin.user-management.index')->with('error', 'User Not Found.');
        }
    }
}
