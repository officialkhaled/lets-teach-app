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
        $selectedSubjects = $student->subject_ids ?? [];

        return view('student.profile.edit', [
            'student' => $student,
            'selectedSubjects' => $selectedSubjects,
        ]);
    }

    public function update(Request $request, Student $student)
    {
        currentUser()->update($request->all());

        $student->update($request->all());

//        $student->education = [
//            'institution' => $request->input('institution'),
//            'degree' => $request->input('degree'),
//            'score' => $request->input('score'),
//            'completion_year' => $request->input('completion_year'),
//        ];

//        $student->subject_ids = $request->input('subject_ids');
//        $student->grade_ids = $request->input('grade_ids');

        $student->save();

        if ($request->avatar) {
            if (currentUser()->avatar && Storage::exists('public/' . currentUser()->avatar)) {
                Storage::delete('public/' . currentUser()->avatar);
            }

            $imageName = "images/" . time() . '.' . $request->avatar->extension();
            $request->avatar->move(storage_path('app/public/images'), $imageName);
            currentUser()->avatar = $imageName;

            currentUser()->save();
        }

        return redirect()->route('student.student-dashboard', $student->id)->with('success', 'Profile Updated Successfully.');
    }
}
