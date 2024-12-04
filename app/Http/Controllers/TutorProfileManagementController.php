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
        
        $selectedSubjects = $tutor->subjects ?? [];
        $selectedGrades = $tutor->grades ?? [];
        
        return view('tutor.profile-management.edit', [
            'tutor' => $tutor,
            'tags' => $tags,
            'selectedSubjects' => $selectedSubjects,
            'selectedGrades' => $selectedGrades,
        ]);
    }
    
    public function update(Request $request, Tutor $tutor)
    {
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
        
        return redirect()->route('tutor.profile-management.edit', $tutor->id)->with('success', 'Tutor Updated Successfully.');
    }
}
