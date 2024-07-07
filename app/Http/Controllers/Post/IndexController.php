<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{

    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $posts = Post::all();
        return view('posts.index', compact('posts'));


    }


}
