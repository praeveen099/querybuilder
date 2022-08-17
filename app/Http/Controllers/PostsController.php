<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function index()
    {

        $posts = DB::table('posts')->paginate(15);

        $numberOfPosts = DB::table('posts')->count();

        return view('posts', ['posts' => $posts, 'numberOfPosts' => $numberOfPosts]);
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
}
