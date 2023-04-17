<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'image' => 'string',
            'title' => 'string',
            'content' => 'string',
        ]);
        Post::create($data);
        return redirect()->to('/posts');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
}
