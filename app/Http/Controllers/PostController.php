<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
      //  $post = Post::find(1);
       // dump($post);
       // dd($post);
       // dd($post->title);

        /*

        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');

        */


        /*

        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');

        */


        $post = Post::where('is_published', 0)->first();
            dump($post->title);
            dd('end');
    }

    public function create()
    {

        $postsArr =[
            [
                'title' =>'title of post from phpstorm',
                'content' =>'some interesting content',
                'image' =>'imageblabla.jpg',
                'likes' => 400,
                'is_published' => 1,
            ],
            [
                'title' =>'another title of post from phpstorm',
                'content' =>'another some interesting content',
                'image' =>'another imageblabla.jpg',
                'likes' => 600,
                'is_published' => 1,
            ],

        ];

        Post::create([
            'title' => 'another title of post from phpstorm',
            'content' => 'another some interesting content',
            'image' => 'another imageblabla.jpg',
            'likes' => 600,
            'is_published' => 1,
        ]);
        dd('created');
    }

    public function update()
    {
        $post = Post::find(6);
       //  dd($post->title);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1000,
            'is_published' => 1,
        ]);
        dd('update');
    }
    public function delete()
    {
        // dd('delete page');


        /*

        $post = Post::find(5);
        $post->delete();
        dd('deleted');
        */

        $post = Post::withTrashed()->find(5);
        $post->restore();
        dd('deleted');
    }

    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate ()
    {
        $anotherPost =[

            'title' => 'some post',
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
        $anatherPost =[

                'title' => 'updatedorcreate some post',
                'content' => 'updatedorcreate some content',
                'image' => 'updatedorcreate some imageblabla.jpg',
                'likes' => 500,
                'is_published' => 0,
        ];
        $post = Post::updateorCreate([
            'title' => 'some not post',
        ],[

            'title' => 'updatedorcreate not some post',
            'content' => 'updatedorcreate not some content',
            'image' => 'updatedorcreate some not imageblabla.jpg',
            'likes' => 500,
            'is_published' => 0,
        ]);
        dump($post->content);
        dd('55555555555555');

    }

}
