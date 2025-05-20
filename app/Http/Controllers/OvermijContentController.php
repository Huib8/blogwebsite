<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OvermijContent;

class OvermijContentController extends Controller
{
    public function edit()
    {
        $content = \App\Models\OvermijContent::firstOrCreate([]);
        return view('post.edit-overmij-content', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $content = OvermijContent::first();
        $content->update($request->only('title', 'content'));

        return redirect()->route('overmij.edit')->with('success', 'Home page updated.');
    }
}
