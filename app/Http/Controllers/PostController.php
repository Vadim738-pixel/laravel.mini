<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // $posts = Post::find(1);
       // dump($posts);
      // dd($posts);
       //  dd($posts->title);

       $posts = Post::all();
       //  dd($posts);
       // dd('end');
/*
        $categories = category::all();
        dd($categories);

      */


        /*
        $category = category::find(1);
        dd($category->title);
        */

/*
        $category = category::find(1);
        $posts = Post::where('category_id', $category->id)->get();
        dd($posts);
*/
     /*
        $category = category::find(1);
        dd($category->posts);
    */

        /*
        $category = category::find(1);
        $posts = Post::find('1');
        //dd($posts->category);
        dd($posts->tags);
     */

        /*
        $posts = Post::find('1');
        $tag = Tag::find(1);
        dd($tag->posts);
         */


       return view('posts.index', compact('posts'));



/*

        $posts = Post::all();
        foreach ($posts as $posts) {
            dump($posts->title);
        }
        dd('end');


*/

        /*

        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $posts) {
            dump($posts->title);
        }
        dd('end');

        */


        /*

        $posts = Post::where('is_published', 1)->first();
            dump($posts->title);
            dd('end');

            */


    }

    public function create()
    {
        $categories = category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories' ,   'tags'  ));
    }


    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => ' ',

        ]);

                   //dd($data);

        Post::create($data);
        return redirect()->route('posts.index');
    }


/*
    public function show($id)
    {
        $post = Post::findOrFail($id);
        dd($post->title);
    }

*/

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $categories = category::all();
       // dd($post->title);
        return view('posts.edit', compact('post','categories'));

    }



    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => ' ',
        ]);

        $post->update($data);
        return redirect()->route('posts.show', $post->id);

    }



    public function delete()
    {
        // dd('delete page');

/*
        $posts = Post::find(5);
        $posts->delete();
        dd('deleted');
    }  */

        $post = Post::withTrashed()->find(5);
        $post->restore();
        dd('deleted');
    }


    public function destroy(Post $post)
    {
        $post->Delete();
        return redirect()->route('posts.index');
    }











    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate ()
    {
        $anotherPost =[

            'title' => 'some posts',
            'content' => 'some content',
            'image' => 'some imageblabla.jpg',
            'likes' => 50000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'sport_cool',
        ],[
            'title' => 'sport_cool',
            'content' => 'some content',
            'image' => 'some imageblabla.jpg',
            'likes' => 50000,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate ()
    {
        $anotherPost =[

                'title' => 'updatedorcreate some posts',
                'content' => 'updatedorcreate some content',
                'image' => 'updatedorcreate some imageblabla.jpg',
                'likes' => 500,
                'is_published' => 0,
        ];
        $post = Post::updateorCreate([
            'title' => 'some not posts',
        ],[

            'title' => 'updatedorcreate not some posts',
            'content' => 'updatedorcreate not some content',
            'image' => 'updatedorcreate some not imageblabla.jpg',
            'likes' => 500,
            'is_published' => 0,
        ]);
        dump($post->content);
        dd('55555555555555');

    }

}
