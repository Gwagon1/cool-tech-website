<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/test', function () {
    $articles = Article::with('category', 'tags')->get();
    return response()->json($articles);
});

// Home page
Route::get('/', [ArticleController::class, 'index']);

// Article page
Route::get('/article/{id}', [ArticleController::class, 'show']);

// Category view page
Route::get('/category/{slug}', [CategoryController::class, 'show']);

// Tag view page
Route::get('/tag/{slug}', [TagController::class, 'show']);

// Legal page
Route::get('/legal', function () {
    return view('legal');
});

// Search page
Route::get('/search', function () {
    return view('search');
});

// Accept cookies
Route::post('/accept-cookies', function () {
    session(['cookie_accepted' => true]);
    return response()->json(['message' => 'Cookies accepted']);
});

