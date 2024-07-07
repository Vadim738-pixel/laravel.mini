<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends Controller
{

    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.

        $post->Delete();
        return redirect()->route('posts.index');


    }


}
