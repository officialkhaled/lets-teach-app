<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Tutor;
use App\Models\Student;

class DashboardController extends Controller
{
    public const greeting = null;
    
    public function greet()
    {
        $hour = now()->hour;
        
        if ($hour < 12) {
            $greeting = "Good Morning";
        } elseif ($hour < 18) {
            $greeting = "Good Afternoon";
        } else {
            $greeting = "Good Evening";
        }
        
        return $greeting;
    }
    
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
            'greet' => $this->greet(),
        ]);
    }
    
    public function tutorDashboard()
    {
        $tutors = Tutor::query()->active()->get();
        $students = Student::query()->active()->get();
        $tags = Tag::query()->active()->get();
        $posts = Post::query()->active()->get();
        
        $appliedJobs = Post::query()->where('status', 3)->get()->count();
        $assignedJobs = Post::query()->where('status', 4)->get()->count();
        $confirmedJobs = Post::query()->where('status', 5)->get()->count();
        $cancelledJobs = Post::query()->where('status', 6)->get()->count();
        
        $userId = auth()->user()->id;
        $tutor = Tutor::query()->firstWhere('user_id', $userId);
        
        $quotes = [
            "The best way to get started is to quit talking and begin doing. - Walt Disney",
            "The pessimist sees difficulty in every opportunity. The optimist sees opportunity in every difficulty. - Winston Churchill",
            "Don't let yesterday take up too much of today. - Will Rogers",
            "You learn more from failure than from success. Don't let it stop you. Failure builds character. - Elon Musk",
            "It's not whether you get knocked down, it's whether you get up. - Vince Lombardi",
        ];
        
        $randomQuote = $quotes[array_rand($quotes)];
        
        return view('tutor.dashboard', [
            'tutors' => $tutors,
            'tutor' => $tutor,
            'students' => $students,
            'tags' => $tags,
            'posts' => $posts,
            'appliedJobs' => $appliedJobs,
            'assignedJobs' => $assignedJobs,
            'confirmedJobs' => $confirmedJobs,
            'cancelledJobs' => $cancelledJobs,
            'greet' => $this->greet(),
            'randomQuote' => $randomQuote,
        ]);
    }
    
    public function studentDashboard()
    {
        $tutors = Tutor::query()->active()->get();
        $students = Student::query()->active()->get();
        $tags = Tag::query()->active()->get();
        $posts = Post::query()->active()->get();
        
        return view('student.dashboard', [
            'tutors' => $tutors,
            'students' => $students,
            'tags' => $tags,
            'posts' => $posts,
            'greet' => $this->greet(),
        ]);
    }
}
