<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.partials.dashboard');
    }
    
    public function view()
    {
        return view('admin.partials.list');
    }
}
