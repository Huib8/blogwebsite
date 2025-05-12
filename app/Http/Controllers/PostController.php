<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::create($request->only('title', 'content'));

        return redirect()->route('post.show', $post->id);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }
}
