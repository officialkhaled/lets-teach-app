<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentProfileController extends Controller
{
    public function edit(Student $student)
    {
        $tags = Tag::query()
            ->where('status', ACTIVE)
            ->latest()
            ->get();

        $selectedSubjects = $student->subject_ids ?? [];

        return view('student.profile.edit', [
            'student' => $student,
            'tags' => $tags,
            'selectedSubjects' => $selectedSubjects,
        ]);
    }

    public function update(Request $request, Student $student)
    {
        currentUser()->update($request->all());

        $student->update($request->except(['education', 'subject_ids', 'grade_ids']));

        $student->education = [
            'institution' => $request->input('institution'),
            'degree' => $request->input('degree'),
            'score' => $request->input('score'),
            'completion_year' => $request->input('completion_year'),
        ];

        $student->subject_ids = $request->input('subject_ids');
        $student->grade_ids = $request->input('grade_ids');

        $student->save();

        if ($request->image) {
            $user = auth()->user();

            if ($user->image && Storage::exists('public/' . $user->image)) {
                Storage::delete('public/' . $user->image);
            }

            $imageName = "images/" . time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/images'), $imageName);
            $user->image = $imageName;

            $user->save();
        }

        return redirect()->route('student.student-dashboard', $student->id)->with('success', 'Profile Updated Successfully.');
    }
}
