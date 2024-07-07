<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends Controller
{

    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $categories = category::all();
        $tags = Tag::all();

        return view('posts.create', compact('categories' ,   'tags' ));


    }


}
