@extends('layouts.app')

@section('content')
    <h2>Search Results for "{{ $query }}"</h2>

    <h3>Articles</h3>
    @foreach($articles as $article)
        <p><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></p>
    @endforeach

    <h3>Categories</h3>
    @foreach($categories as $category)
        <p><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></p>
    @endforeach

    <h3>Tags</h3>
    @foreach($tags as $tag)
        <p><a href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a></p>
    @endforeach
@endsection
