<?php

namespace App\Http\Controllers;

class TutorController extends Controller
{
    public function index()
    {
        return view('tutor.dashboard');
    }
}
