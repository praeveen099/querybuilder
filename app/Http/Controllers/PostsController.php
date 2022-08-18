<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{

    public function index()
    {

        $posts = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('posts.*', 'users.name')
        ->paginate(15);

        $numberOfAuthors = DB::table('users')->count();

        return view('posts', ['posts' => $posts, 'numberOfAuthors' => $numberOfAuthors]);
    }

    public function create()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'user_id' => 'required',
        ]);

        DB::table('posts')->insert([
            'title' => $attributes['title'],
            'excerpt' => $attributes['excerpt'],
            'body' => $attributes['body'],
            'user_id' => $attributes['user_id'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return redirect('/posts');

    }

    public function destroy($post)
    {
        $deleted = DB::table('posts')->where('id', '=', $post)->delete();

        return redirect('/posts');
    }
}
