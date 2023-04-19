<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequst $request)
    {
        $data = $request->validate();
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }
}
