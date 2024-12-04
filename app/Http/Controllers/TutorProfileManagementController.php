<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorProfileManagementController extends Controller
{
    public function edit(Tutor $tutor)
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        $selectedSubjects = $tutor->subject_ids ?? [];
        $selectedGrades = $tutor->grade_ids ?? [];
        
        return view('tutor.profile-management.edit', [
            'tutor' => $tutor,
            'tags' => $tags,
            'selectedSubjects' => $selectedSubjects,
            'selectedGrades' => $selectedGrades,
        ]);
    }
    
    public function update(Request $request, Tutor $tutor)
    {
        $tutor->update($request->except(['education', 'subject_ids', 'grade_ids']));
        
        $tutor->education = [
            'institution' => $request->input('institution'),
            'degree' => $request->input('degree'),
            'score' => $request->input('score'),
            'completion_year' => $request->input('completion_year'),
        ];
        
        $tutor->subject_ids = $request->input('subject_ids');
        $tutor->grade_ids = $request->input('grade_ids');
        
        $tutor->save();
        
        if ($request->image) {
            $user = auth()->user();
            
            $imageName = "images/" . time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/images'), $imageName);
            $user->image = $imageName;
            
            $user->save();
        }
        
        return redirect()->route('tutor.tutor-dashboard', $tutor->id)->with('success', 'Tutor Updated Successfully.');
    }
}
