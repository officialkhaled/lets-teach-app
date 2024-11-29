<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsManagementController extends Controller
{
    public function index()
    {
        $posts = Post::query()->with(['student', 'grade'])->get();
        
        return view('admin.content-moderation.posts.list', [
            'posts' => $posts,
        ]);
    }
    
    public function create()
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        return view('admin.content-moderation.posts.create', [
            'tags' => $tags,
        ]);
    }
    
    public function edit(Post $post)
    {
        $tags = Tag::query()
            ->where('type', 1)
            ->where('status', 1)
            ->latest()
            ->get();
        
        $selectedSubjects = $student->subjects ?? [];
        
        return view('admin.content-moderation.posts.edit-post', [
            'post' => $post,
            'tags' => $tags,
            'selectedSubjects' => $selectedSubjects,
        ]);
    }
    
    public function update(Request $request)
    {
    
    }
    
    public function destroy(Post $post)
    {
    
    }
    
    public function approve()
    {
    
    }
    
    public function reject()
    {
    
    }
}
