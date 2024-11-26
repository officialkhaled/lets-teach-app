<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tutor;
use App\Models\Review;
use App\Models\Student;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $tutors = Tutor::all();
        $students = Student::all();
        $posts = Post::all();
        $reviews = Review::all();
        
        return view('admin.partials.dashboard', [
            'tutors' => $tutors,
            'students' => $students,
            'posts' => $posts,
            'reviews' => $reviews,
        ]);
    }
}
