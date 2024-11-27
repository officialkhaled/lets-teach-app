<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagManagementController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        
        return view('admin.tags-management.list', [
            'tags' => $tags,
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
    
    public function destroy()
    {
    
    }
}
