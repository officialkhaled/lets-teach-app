<?php

namespace App\Http\Controllers;

use App\Models\Post;

class JobPostsController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->with([
                'student',
                'subjects',
                'grade',
                'medium',
                'preferredTutor',
                'tutoringDay',
            ])
            ->where('approval_status', 1)
            ->latest()
            ->get();
        
        return view('tutor.job-posts.index', [
            'posts' => $posts,
        ]);
    }
    
    public function apply()
    {
        
    }
}
