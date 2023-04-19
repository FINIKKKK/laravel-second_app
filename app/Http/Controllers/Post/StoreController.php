<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validate();
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->to('/posts');
    }
}
