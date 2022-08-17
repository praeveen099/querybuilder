@extends('layout')

@section('content')

    <h1>Posts</h1>

    <form method="POST" action="/posts">
        @csrf
        <label for="name">Title:</label>
        <input type="text" id="title" name="title"><br>
        <label for="name">Excerpt:</label>
        <input type="text" id="excerpt" name="excerpt"><br>
        <label for="name">Body:</label>
        <input type="text" id="body" name="body"><br>
        <label for="name">Author id:</label>
        <input type="number" id="user_id" name="user_id" min="1" max="100"><br>
        <input type="submit" value="Submit">

    </form>


