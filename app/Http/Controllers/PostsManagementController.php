<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Constants\ApplicationConstant;
use App\Http\Requests\PostsManagementRequest;

class PostsManagementController extends Controller
{
    public function index()
    {
        $studentId = Student::query()->firstWhere('user_id', userId())['id'] ?? '';
        $posts = Post::query()
            ->with('student')
            ->where('student_id', $studentId)
            ->latest()
            ->get();

        return view('student.posts-management.list', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('student.posts-management.create', [
            'mediums' => ApplicationConstant::MEDIUMS,
            'classes' => ApplicationConstant::CLASSES,
            'subjects' => ApplicationConstant::SUBJECTS,
            'genders' => ApplicationConstant::GENDERS,
            'tutoringTypes' => ApplicationConstant::TUTORING_TYPE,
            'tutoringDays' => ApplicationConstant::TUTORING_DAYS,
        ]);
    }

    public function store(Request $request)
    {
        $studentId = Student::firstWhere('user_id', userId())['id'];

        Post::create([
            'title' => $request->input('title'),
            'student_id' => $studentId,
            'subject_ids' => $request->input('subject_ids'),
            'class_id' => $request->input('class_id'),
            'medium_id' => $request->input('medium_id'),
            'gender_id' => $request->input('gender_id'),
            'tutoring_day_id' => $request->input('tutoring_day_id'),
            'tutoring_type_id' => $request->input('tutoring_type_id'),
            'salary' => $request->input('salary'),
            'from_time' => $request->input('from_time'),
            'to_time' => $request->input('to_time'),
            'location' => $request->input('location'),
            'note' => $request->input('note'),
        ]);

        return redirect()->route('student.posts-management.index')->with('success', 'Post Added Successfully!');
    }

    public function edit(Post $post)
    {
        $selectedSubjects = $post->subject_ids ?? [];

        return view('student.posts-management.edit-post', [
            'post' => $post,
            'mediums' => ApplicationConstant::MEDIUMS,
            'classes' => ApplicationConstant::CLASSES,
            'subjects' => ApplicationConstant::SUBJECTS,
            'genders' => ApplicationConstant::GENDERS,
            'tutoringTypes' => ApplicationConstant::TUTORING_TYPE,
            'tutoringDays' => ApplicationConstant::TUTORING_DAYS,
            'selectedSubjects' => $selectedSubjects,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->except('subject_ids'));
        $post->subject_ids = $request->input('subject_ids');
        $post->save();

        return redirect()->route('student.posts-management.index')->with('success', 'Post Updated Successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('student.posts-management.index')->with('success', 'Post Deleted Successfully.');
    }

    public function view(Post $post)
    {
        return view('student.posts-management.view.index', [
            'post' => $post,
        ]);
    }
}
