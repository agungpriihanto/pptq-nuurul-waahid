<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index', [
            'title' => 'INDEKS POST',
            'data'  => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'title'  => $post->title,
            'data'   => $post,
            'sbdata' => Post::latest()->paginate(7)
        ]);
    }
}