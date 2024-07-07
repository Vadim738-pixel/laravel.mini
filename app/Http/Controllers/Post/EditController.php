<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends Controller
{

    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.

        $categories = category::all();
        $tags = Tag::all();
        // dd($post->title);

        return view('posts.edit', compact('post','categories', 'tags'));


    }


}
