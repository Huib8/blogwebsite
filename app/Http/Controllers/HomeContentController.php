<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;

class HomeContentController extends Controller
{
    public function edit()
    {
        $content = \App\Models\HomeContent::firstOrCreate([]);
        return view('post.edit-home-content', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $content = HomeContent::first();
        $content->update($request->only('title', 'content'));

        return redirect()->route('home.edit')->with('success', 'Over mij is aangepast!.');
    }
}
