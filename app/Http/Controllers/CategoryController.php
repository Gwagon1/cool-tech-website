<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->articles; 
        return view('category', compact('category', 'articles'));
    }

    public function search(Request $request)
    {
        $categorySlug = Str::slug($request->input('category'));
        return redirect()->route('category.show', ['slug' => $categorySlug]);
    }

}
