<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class PostsManagementController extends Controller
{
    public function index()
    {
        $studentId = Student::query()->where('user_id', auth()->user()->id)->first()['id'] ?? '';
        $posts = Post::query()->with([
            'student',
            'subjects',
            'grade',
            'medium',
            'preferredTutor',
            'tutoringDay',
        ])->where('student_id', $studentId)->latest()->get();
        
        return view('student.posts-management.list', [
            'posts' => $posts,
        ]);
    }
    
    public function create()
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        return view('student.posts-management.create', [
            'tags' => $tags,
        ]);
    }
    
    public function store(Request $request)
    {
        $studentId = Student::where('user_id', auth()->user()->id)->first()['id'];
        
        Post::create([
            'student_id' => $studentId,
            'subject_ids' => $request->input('subject_ids'),
            'grade_id' => $request->input('grade_id'),
            'job_id' => $request->input('job_id'),
            'title' => $request->input('title'),
            'medium_id' => $request->input('medium_id'),
            'preferred_tutor_id' => $request->input('preferred_tutor_id'),
            'salary' => $request->input('salary'),
            'tutoring_day_id' => $request->input('tutoring_day_id'),
            'from_time' => $request->input('from_time'),
            'to_time' => $request->input('to_time'),
            'location' => $request->input('location'),
        ]);

        return redirect()->route('student.posts-management.index')->with('success', 'Post Added Successfully!');
    }
    
    public function edit(Post $post)
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        $selectedSubjects = $post->subject_ids ?? [];
        
        return view('student.posts-management.edit-post', [
            'post' => $post,
            'tags' => $tags,
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
}