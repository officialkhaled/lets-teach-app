<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagManagementController extends Controller
{
    public function index()
    {
        $tags = Tag::query()
            ->latest()
            ->get();

        return view('admin.tags-management.list', [
            'tags' => $tags,
        ]);
    }

    public function create()
    {
        return view('admin.tags-management.create');
    }

    public function store(Request $request)
    {
        Tag::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
        ]);

        return redirect()->route('admin.tags-management.index')->with('success', 'Tag Added Successfully!');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags-management.edit-tag', [
            'tag' => $tag,
        ]);
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
        ]);

        return redirect()->route('admin.tags-management.index')->with('success', 'Tag Updated Successfully!');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags-management.index')->with('success', 'Tag Deleted Successfully!');
    }
}
