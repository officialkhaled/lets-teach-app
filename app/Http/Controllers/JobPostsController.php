<?php

namespace App\Http\Controllers;

use App\Models\Post;

class JobPostsController extends Controller
{
    public function index()
    {
//        $tagIds = auth()->user()->
        
        $posts = Post::query()
            ->with(['student', 'subjects', 'grade'])
//            ->whereIn('subject_ids',)
//            ->whereIn('grade_id',)
            ->get();
//
//        dd($posts);
        
        return view('tutor.job-posts.index', [
            'posts' => $posts,
        ]);
    }
}
