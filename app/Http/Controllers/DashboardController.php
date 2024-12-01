<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Tutor;
use App\Models\Student;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $tutors = Tutor::all();
        $students = Student::all();
        $tags = Tag::query()->where('status', 1)->get();
        $posts = Post::all();
        
        return view('admin.dashboard', [
            'tutors' => $tutors,
            'students' => $students,
            'tags' => $tags,
            'posts' => $posts,
        ]);
    }

//    public function tutorDashboard()
//    {
//        $tutors = Tutor::all();
//        $students = Student::all();
//        $tags = Tag::query()->where('status', 1)->get();
//        $posts = Post::all();
//
//        return view('tutor.dashboard', [
//            'tutors' => $tutors,
//            'students' => $students,
//            'tags' => $tags,
//            'posts' => $posts,
//        ]);
//    }
    
    public function studentDashboard()
    {
        $tutors = Tutor::all();
        $students = Student::all();
        $tags = Tag::query()->where('status', 1)->get();
        $posts = Post::all();
        
        return view('student.dashboard', [
            'tutors' => $tutors,
            'students' => $students,
            'tags' => $tags,
            'posts' => $posts,
        ]);
    }
}
