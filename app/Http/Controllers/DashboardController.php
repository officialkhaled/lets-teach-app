<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Tutor;
use App\Models\Student;

class DashboardController extends Controller
{
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
    
    public function randomQuote()
    {
        $quotes = [
            "The best way to get started is to quit talking and begin doing. - Walt Disney",
            "The pessimist sees difficulty in every opportunity. The optimist sees opportunity in every difficulty. - Winston Churchill",
            "Don't let yesterday take up too much of today. - Will Rogers",
            "You learn more from failure than from success. Don't let it stop you. Failure builds character. - Elon Musk",
            "It's not whether you get knocked down, it's whether you get up. - Vince Lombardi",
        ];
        return $quotes[array_rand($quotes)];
    }
    
    public function adminDashboard()
    {
        $tutors = Tutor::all();
        $students = Student::all();
        $tags = Tag::query()->active()->get();
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
        $jobCounts = Post::query()
            ->selectRaw("
                COUNT(CASE WHEN status = '3' THEN 1 END) as appliedJobs,
                COUNT(CASE WHEN status = '4' THEN 1 END) as assignedJobs,
                COUNT(CASE WHEN status = '5' THEN 1 END) as confirmedJobs,
                COUNT(CASE WHEN status = '6' THEN 1 END) as cancelledJobs
            ")
            ->first();
        
        $tutor = Tutor::query()->firstWhere('user_id', userId());
        
        return view('tutor.dashboard', [
            'tutor' => $tutor,
            'appliedJobs' => $jobCounts->appliedJobs ?? 0,
            'assignedJobs' => $jobCounts->assignedJobs ?? 0,
            'confirmedJobs' => $jobCounts->confirmedJobs ?? 0,
            'cancelledJobs' => $jobCounts->cancelledJobs ?? 0,
            'greet' => $this->greet(),
            'randomQuote' => $this->randomQuote(),
        ]);
    }
    
    public function studentDashboard()
    {
        $tutors = Tutor::all();
        $students = Student::all();
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
