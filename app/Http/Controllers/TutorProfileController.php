<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorProfileController extends Controller
{
    public function edit(Tutor $tutor)
    {
        $selectedSubjects = $tutor->subject_ids ?? [];
        $selectedGrades = $tutor->grade_ids ?? [];

        return view('tutor.profile.edit', [
            'tutor' => $tutor,
            'selectedSubjects' => $selectedSubjects,
            'selectedGrades' => $selectedGrades,
        ]);
    }

    public function update(Request $request, Tutor $tutor)
    {
        auth()->user()->update($request->all());

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

        if ($request->avatar) {
            $user = auth()->user();

            $imageName = "images/" . time() . '.' . $request->avatar->extension();
            $request->avatar->move(storage_path('app/public/images'), $imageName);
            $user->avatar = $imageName;

            $user->save();
        }

        return redirect()->route('tutor.tutor-dashboard', $tutor->id)->with('success', 'Profile Updated Successfully.');
    }
}
