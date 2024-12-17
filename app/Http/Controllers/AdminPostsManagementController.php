<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostsManagementController extends Controller
{
    public function index()
    {
        $posts = Post::query()->with(['student', 'subjects', 'grade'])->latest()->get();
        
        return view('admin.content-moderation.posts.list', [
            'posts' => $posts,
        ]);
    }
    
    public function edit(Post $post)
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->latest()
            ->get();
        
        $selectedSubjects = $post->subject_ids ?? [];
        
        return view('admin.content-moderation.posts.edit-post', [
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
        
        return redirect()->route('admin.content-moderation.posts.index')->with('success', 'Post Updated Successfully!');
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.content-moderation.posts.index')->with('success', 'Post Deleted Successfully.');
    }
    
    public function approve(Post $post)
    {
        $post->update(['approval_status' => 1]);
        return back()->with('success', 'Post Approved Successfully.');
    }
    
    public function reject(Post $post)
    {
        $post->update(['approval_status' => 2]);
        return back()->with('success', 'Post Rejected Successfully.');
    }
}
