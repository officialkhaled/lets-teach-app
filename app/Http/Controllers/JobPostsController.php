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
            ->where('status', ACTIVE)
            ->latest()
            ->get();

        return view('tutor.job-posts.index', [
            'posts' => $posts,
        ]);
    }

    public function apply(Post $post)
    {
        try {
            $post->apply();

            notyf()->addSuccess('Applied Successfully.');
        } catch (\Exception $exception) {
            notyf()->addError($exception->getMessage());
        }

        return redirect()->back();
    }
}
