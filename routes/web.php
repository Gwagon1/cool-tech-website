<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;


Route::get('/test', function () {
    $articles = Article::with('category', 'tags')->get();
    return response()->json($articles);
});


Route::get('/search', function () {
    return view('search');
})->name('search.page');


// Home page
Route::get('/', [ArticleController::class, 'index']);


// Article page
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');


// Category view page
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');


// Tag view page
Route::get('/tag/{slug}', [TagController::class, 'show'])->name('tags.show');


// Legal page
Route::get('/legal', function () {
    return view('legal');
});


// Search page
Route::get('/search', [SearchController::class, 'index']);


// Search Routes
Route::post('/search/article', [SearchController::class, 'searchByArticle'])->name('search.article');
Route::post('/search/category', [SearchController::class, 'searchByCategory'])->name('search.category');
Route::post('/search/tag', [SearchController::class, 'searchByTag'])->name('search.tag');


// Accept cookies
Route::post('/accept-cookies', function () {
    session(['cookie_accepted' => true]);
    return response()->json(['message' => 'Cookies accepted']);
});

