@extends('layouts.app')

@section('content')
<h1>Search Articles</h1>

<form action="{{ url('/article') }}" method="GET">
    <label for="articleId">Search by Article ID:</label>
    <input type="text" id="articleId" name="articleId" placeholder="Enter Article ID">
    <button type="submit">Search Article</button>
</form>

<form action="{{ url('/category') }}" method="GET">
    <label for="category">Search by Category:</label>
    <input type="text" id="category" name="category" placeholder="Enter Category Name">
    <button type="submit">Search Category</button>
</form>

<form action="{{ url('/tag') }}" method="GET">
    <label for="tag">Search by Tag:</label>
    <input type="text" id="tag" name="tag" placeholder="Enter Tag Name">
    <button type="submit">Search Tag</button>
</form>
@endsection
