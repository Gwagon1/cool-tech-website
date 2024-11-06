<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Fetch the latest 5 articles
        $articles = Article::latest()->take(5)->get();
        return view('home', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $tags = $article->tags; 
        return view('article', compact('article', 'tags'));
    }

    public function search(Request $request)
    {
        $articleId = $request->input('articleId');
        return redirect()->route('article.show', ['id' => $articleId]);
    }

}

