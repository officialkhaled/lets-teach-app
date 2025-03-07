<?php

namespace App\Http\Controllers;

use App\Models\Post;

class AdminPostsManagementController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->with('student')
            ->latest()
            ->get();

        return view('admin.content-moderation.posts.list', [
            'posts' => $posts,
        ]);
    }

    public function view(Post $post)
    {
        return view('admin.content-moderation.posts.view.index', [
            'post' => $post,
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.content-moderation.posts.index')->with('success', 'Post Deleted Successfully.');
    }

    public function approve(Post $post)
    {
        $post->approve();
        return back()->with('success', 'Post Approved Successfully.');
    }

    public function reject(Post $post)
    {
        $post->reject();
        return back()->with('success', 'Post Rejected Successfully.');
    }
}
