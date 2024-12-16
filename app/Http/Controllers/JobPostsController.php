<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Tutor;

class JobPostsController extends Controller
{
    public function index()
    {
        $tutorDetail = Tutor::query()
            ->where('user_id', auth()->user()->id)
            ->first();
        
        $subjectIds = $tutorDetail->subject_ids;
        $gradeIds = $tutorDetail->grade_ids;
        
//        dd(
//            $subjectIds,
//            Post::query()
//                ->with([
//                    'student',
//                    'subjects',
//                    'grade',
//                    'medium',
//                    'preferredTutor',
//                    'tutoringDay',
//                ])
////                ->whereIn('subject_ids', $subjectIds)
////                ->whereIn('grade_id', $gradeIds)
//                ->where('approval_status', 1)
//                ->latest()
//                ->get()
//                ->toArray(),
//        );
        
        $posts = Post::query()
            ->with([
                'student',
                'subjects',
                'grade',
                'medium',
                'preferredTutor',
                'tutoringDay',
            ])
//            ->whereIn('subject_ids', $subjectIds)
//            ->whereIn('grade_id', $gradeIds)
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
