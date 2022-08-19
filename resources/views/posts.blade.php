@extends('layout')

@section('content')


    <table>
        <tr>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Author</th>
          </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->excerpt }}</td>
            <td>{{ $post->name }}</td>
            <td>
                <form method="POST" action="/posts/{{$post->id}}">
                    @csrf
                    @method('DELETE')

                    <button class="delete">Delete</button>
                </form>
            </td>
            <td><a href="/posts/update/{{$post->id}}" style="background-color: #0dd962;border: 5px solid black;
                color:white; padding: 15px 32px;text-align: center;text-decoration: none;
                display: inline-block;font-size: 16px;">Update</a></td>
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
        <input type="number" id="user_id" name="user_id" min="1" max="{{ $numberOfAuthors }}" required><br>
        <input type="submit" value="Submit">

    </form>


