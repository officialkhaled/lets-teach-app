<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsManagementController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('admin.content-moderation.posts.list', [
            'posts' => $posts,
        ]);
    }
}
