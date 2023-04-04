<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BerandaController extends Controller
{
    public function index(Post $post)
    {
        return view('beranda.index', [
            'title' => 'BERANDA',
            'data'  => Post::latest()->get()
        ]);
    }
}