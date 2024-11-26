<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 
use App\Models\Category;
use App\Models\Tag;

class SearchController extends Controller
{
    /**
     * Search by Article ID.
     */
    public function searchByArticle(Request $request)
    {
        $article = Article::find($request->input('article_id'));

        if ($article) {
            return redirect()->route('articles.show', $article->id);
        }

        return back()->withErrors(['article_id' => 'Article not found']);
    }


    /**
     * Search by Category.
     */
    public function searchByCategory(Request $request)
    {
        $category = Category::where('name', $request->input('category_name'))->first();

        if ($category) {
            return redirect()->route('categories.show', $category->id);
        }

        return back()->withErrors(['category_name' => 'Category not found']);
    }


    /**
     * Search by Tag.
     */
    public function searchByTag(Request $request)
    {
        $tag = Tag::where('name', $request->input('tag_name'))->first();

        if ($tag) {
            return redirect()->route('tags.show', $tag->id);
        }

        return back()->withErrors(['tag_name' => 'Tag not found']);
    }

    
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Example search: Searching in Articles, Categories, and Tags
        $articles = Article::where('title', 'LIKE', '%' . $query . '%')
                            ->orWhere('content', 'LIKE', '%' . $query . '%')
                            ->get();

        $categories = Category::where('name', 'LIKE', '%' . $query . '%')
                              ->orWhere('slug', 'LIKE', '%' . $query . '%')
                              ->get();

        $tags = Tag::where('name', 'LIKE', '%' . $query . '%')
                   ->orWhere('slug', 'LIKE', '%' . $query . '%')
                   ->get();

        // Return a view with the search results
        return view('search.results', compact('articles', 'categories', 'tags', 'query'));
    }


        /**
     * Display the search page with articles.
     */
    public function index()
    {
        // Fetch all articles and pass them to the view
        $articles = Article::all();

        return view('search.index', compact('articles'));
    }
}
