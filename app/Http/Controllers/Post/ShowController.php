<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
      return view('post.show', compact('post'));
    }
}
