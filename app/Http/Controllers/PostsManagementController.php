<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsManagementController extends Controller
{
    public function index()
    {
        $posts = Post::query()->with(['student', 'tags', 'tag'])->get();
        
        return view('admin.content-moderation.posts.list', [
            'posts' => $posts,
        ]);
    }
    
    public function create() //remove from here
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        return view('admin.content-moderation.posts.create', [
            'tags' => $tags,
        ]);
    }
    
    public function store(Request $request) //remove from here
    {
        $posts = Post::create([
            'student_id' => 1, //remove from here
            'subjects' => $request->input('subjects'),
            'grade' => $request->input('grade'),
            'description' => $request->input('description'),
            'budget' => $request->input('budget'),
            'from_time' => $request->input('from_time'),
            'to_time' => $request->input('to_time'),
        ]);
        
        return redirect()->route('admin.content-moderation.posts.index')->with('success', 'Post Added Successfully!');
    }
    
    public function edit(Post $post)
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        $selectedSubjects = $post->subjects ?? [];
        
        return view('admin.content-moderation.posts.edit-post', [
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
        
        return redirect()->route('admin.content-moderation.posts.index')->with('success', 'Post Updated Successfully!');
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('admin.content-moderation.posts.index')->with('success', 'Post Deleted Successfully.');
    }
    
    public function approve()
    {
    
    }
    
    public function reject()
    {
    
    }
}
