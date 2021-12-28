<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    public function index()
    {   
        $data['posts'] = Post::all();
        //$data['posts'] = Post::select('title','body')->get();
        //$data['posts'] = Post::pluck('id')->toArray();
        return view('posts.index', $data);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        //
    }

    public function edit(Post $post)
    {
        return view('posts.edit');
    }

    public function update(PostRequest $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
         $post->delete();
    }
}
