<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tutor;
use App\Models\Student;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $tutors = Tutor::all();
        $students = Student::all();
        $posts = Post::all();

        return view('admin.dashboard', [
            'tutors' => $tutors,
            'students' => $students,
            'posts' => $posts,
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
        ]);
    }

    public function studentDashboard()
    {
        $jobCounts = Post::query()
            ->selectRaw("
                COUNT(CASE WHEN status = '0' THEN 1 END) as pendingJobs,
                COUNT(CASE WHEN status = '1' THEN 1 END) as approvedJobs,
                COUNT(CASE WHEN status = '3' THEN 1 END) as appliedJobs,
                COUNT(CASE WHEN status = '5' THEN 1 END) as confirmedJobs
            ")
            ->first();

        $student = Student::query()->firstWhere('user_id', userId());

        return view('student.dashboard', [
            'student' => $student,
            'pendingJobs' => $jobCounts->pendingJobs ?? 0,
            'approvedJobs' => $jobCounts->approvedJobs ?? 0,
            'appliedJobs' => $jobCounts->appliedJobs ?? 0,
            'confirmedJobs' => $jobCounts->confirmedJobs ?? 0,
        ]);
    }
}
