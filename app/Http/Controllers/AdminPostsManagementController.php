<?php

namespace App\Http\Controllers;

use App\Models\Post;

class AdminPostsManagementController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->with('student')
            ->latest()
            ->get();

        return view('admin.content-moderation.posts.list', [
            'posts' => $posts,
        ]);
    }

    public function view(Post $post)
    {
        return (new PostsManagementController())->view($post);
    }

    public function destroy(Post $post)
    {
        try {
            $post->delete();

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Post Deleted Successfully.');

            return redirect()->route('admin.content-moderation.posts.index');
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function approve(Post $post)
    {
        try {
            $post->approve();

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Post Approved Successfully.');

            return redirect()->back();
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }

    public function reject(Post $post)
    {
        try {
            $post->reject();

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Post Rejected Successfully.');

            return redirect()->back();
        } catch (\Exception $exception) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->ripple(false)
                ->addError($exception->getMessage());

            return redirect()->back();
        }
    }
}
