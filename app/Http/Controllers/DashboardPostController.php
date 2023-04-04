<?php

namespace App\Http\Controllers;

use App\Models\Post;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'POST',
            'posts' => Post::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Tulis Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'title'    => 'required',
            'category' => 'required',
            'post_img' => 'image|max:2048',
            'body'     => 'required',
        ]);

        $validateData['slug'] = Str::slug($request->title);

        if ($request->file('post_img')) {
            $validateData['post_img'] = $request->file('post_img')->store('posts-img');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 150);

        Post::create($validateData);

        return redirect('/dashboard/posts')->with('success', 'Post berhasil diposting!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => $post->title,
            'data'  => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title' => 'Edit Post',
            'data'  => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title'    => 'required',
            'category' => 'required',
            'post_img' => 'image|max:2048',
            'body'     => 'required',
        ];

        $validateData = $request->validate($rules);

        $validateData['slug'] = Str::slug($request->title);
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 150);

        if ($request->file('post_img')) {
            if ($request->oldImg) {
                Storage::delete($request->oldImg);
            }
            $validateData['post_img'] = $request->file('post_img')->store('posts-img');
        }

        Post::where('id', $post->id)
            ->update($validateData);

        return redirect('/dashboard/posts')->with('success', 'Post berhasil diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->post_img) {
            Storage::delete($post->post_img);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Data berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}