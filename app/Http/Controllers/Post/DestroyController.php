<?php

namespace App\Http\Controllers;

class DestroyController extends Controller
{
    public function __invoke()
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
