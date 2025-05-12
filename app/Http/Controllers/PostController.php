<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show form to create a post
    public function create()
    {
        return view('post.create');
    }

    // Save post to DB
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::create($request->only('title', 'content'));

        return redirect()->route('post.show', $post->id);
    }

    // Show a single post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }
}
