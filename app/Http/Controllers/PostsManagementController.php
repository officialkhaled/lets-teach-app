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
        $posts = Post::query()->with(['student', 'tags', 'tag'])->latest()->get();
        
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
            'subjects' => $request->input('subjects'),
            'grade' => $request->input('grade'),
            'description' => $request->input('description'),
            'budget' => $request->input('budget'),
            'from_time' => $request->input('from_time'),
            'to_time' => $request->input('to_time'),
        ]);
        
        return redirect()->route('student.posts-management.index')->with('success', 'Post Added Successfully!');
    }
    
    public function edit(Post $post)
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        $selectedSubjects = $post->subjects ?? [];
        
        return view('student.posts-management.edit-post', [
            'post' => $post,
            'tags' => $tags,
            'selectedSubjects' => $selectedSubjects,
        ]);
    }
    
    public function update(Request $request, Post $post)
    {
        $post->update($request->except('subjects'));
        $post->subjects = $request->input('subjects');
        $post->save();
        
        return redirect()->route('student.posts-management.index')->with('success', 'Post Updated Successfully!');
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('student.posts-management.index')->with('success', 'Post Deleted Successfully.');
    }
}
