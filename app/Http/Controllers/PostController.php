<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // Prevent IDOR, make sure this current user is the owner of this post
        if ($post->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access.');
        }

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);


        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
