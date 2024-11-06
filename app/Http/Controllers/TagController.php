<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $articles = $tag->articles; 
        return view('tag', compact('tag', 'articles'));
    }

    public function search(Request $request)
    {
        $tagSlug = Str::slug($request->input('tag'));
        return redirect()->route('tag.show', ['slug' => $tagSlug]);
    }

}

