@extends('layouts.app')

@section('content')
<h1>Articles Tagged: {{ $tag->name }}</h1>
@foreach ($articles as $article)
    <div class="article-preview">
        <h2>
            <a href="{{ url('/article/' . $article->id) }}">{{ $article->title }}</a>
        </h2>
        <p>{{ Str::limit($article->content, 100) }}</p>
    </div>
@endforeach
@endsection
