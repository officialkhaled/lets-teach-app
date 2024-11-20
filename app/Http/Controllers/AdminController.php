<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        return view('admin.partials.dashboard', [
            'user' => $user
        ]);
    }
    
    public function create()
    {
    
    }
    
    public function store()
    {
    
    }
    
    public function edit()
    {
    
    }
    
    public function update()
    {
    
    }
    
    public function delete()
    {
    
    }
}
