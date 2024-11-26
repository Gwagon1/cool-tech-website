@extends('layouts.app')

@section('content')
    <div class="search-container">
        <h1>Search</h1>

        <!-- Search by Article ID -->
        <form action="{{ route('search.article') }}" method="POST">
            @csrf
            <label for="article_id">Search by Article ID:</label>
            <input type="text" name="article_id" id="article_id" placeholder="Enter Article ID">
            <button type="submit">Search</button>
        </form>

        <!-- Search by Category -->
        <form action="{{ route('search.category') }}" method="POST">
            @csrf
            <label for="category_name">Search by Category:</label>
            <input type="text" name="category_name" id="category_name" placeholder="Enter Category Name">
            <button type="submit">Search</button>
        </form>

        <!-- Search by Tag -->
        <form action="{{ route('search.tag') }}" method="POST">
            @csrf
            <label for="tag_name">Search by Tag:</label>
            <input type="text" name="tag_name" id="tag_name" placeholder="Enter Tag Name">
            <button type="submit">Search</button>
        </form>
    </div>
@endsection
