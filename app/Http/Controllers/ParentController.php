<?php

namespace App\Http\Controllers;

class ParentController extends Controller
{
    public function index()
    {
        return view('parent.dashboard');
    }
}
