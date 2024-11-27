<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Tutor;
use App\Models\Student;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $tutors = Tutor::all();
        $students = Student::all();
        $posts = Post::all();
        $tags = Tag::query()->where('status', 1)->get();
        
        return view('admin.partials.dashboard', [
            'tutors' => $tutors,
            'students' => $students,
            'posts' => $posts,
            'tags' => $tags,
        ]);
    }
}
