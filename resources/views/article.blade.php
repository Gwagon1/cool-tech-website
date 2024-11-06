@extends('layouts.app')

@section('content')
<h1>{{ $article->title }}</h1>
<p><strong>Published on:</strong> {{ $article->created_at->format('F j, Y') }}</p>
<p><strong>Category:</strong> <a href="{{ url('/category/' . $article->category->slug) }}">{{ $article->category->name }}</a></p>
<p><strong>Tags:</strong>
    @foreach ($tags as $tag)
        <a href="{{ url('/tag/' . $tag->slug) }}">{{ $tag->name }}</a>{{ !$loop->last ? ', ' : '' }}
    @endforeach
</p>
<p>{{ $article->content }}</p>
@endsection
