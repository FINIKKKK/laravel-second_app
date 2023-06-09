<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}
