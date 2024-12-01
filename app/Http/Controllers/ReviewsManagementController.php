<?php

namespace App\Http\Controllers;

use App\Models\Review;

class ReviewsManagementController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        
        return view('admin.content-moderation.reviews.list', [
            'reviews' => $reviews,
        ]);
    }
}
