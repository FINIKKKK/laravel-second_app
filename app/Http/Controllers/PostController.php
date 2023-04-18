<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // return view('post.index', compact('posts'));

        $tag = Tag::find(1);
        dd($tag->posts);
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

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'image' => 'string',
            'title' => 'string',
            'content' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
