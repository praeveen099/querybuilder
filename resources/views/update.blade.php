@extends('layout')

@section('content')

<form method="POST" action="/posts/update/{{ $post->id }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value = "{{ $post->title }}" required><br>
    <label for="excerpt">Excerpt:</label>
    <input type="text" id="excerpt" name="excerpt" value = "{{ $post->excerpt }}"required><br>
    <label for="body">Body:</label>
    <input type="text" id="body" name="body" value = "{{ $post->body }}"required><br>
    <label for="user_id">Author id:</label>
    <input type="number" id="user_id" name="user_id" min="1" max="100" value = "{{ $post->user_id }}"required><br>
    <input type="submit" value="Update">

</form>
