@extends('layout')

@section('content')


    <table>
        <tr>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Author ID</th>
          </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->excerpt }}</td>
            <td>{{ $post->user_id }}</td>
        </tr>


        @endforeach

    </table>
    {{ $posts->links() }}
    <form method="POST" action="/posts">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="excerpt">Excerpt:</label>
        <input type="text" id="excerpt" name="excerpt" required><br>
        <label for="body">Body:</label>
        <input type="text" id="body" name="body" required><br>
        <label for="user_id">Author id:</label>
        <input type="number" id="user_id" name="user_id" min="1" max="{{ $numberOfPosts }}" required><br>
        <input type="submit" value="Submit">

    </form>


