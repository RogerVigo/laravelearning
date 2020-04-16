<?php

namespace App\Http\Controllers;


use App\Post;

class PostsController2 extends Controller
{
    public function show($slug)
    {

        //Eloquent- ORM de php para mapeo de objetos.
        // $post=Post::where('slug',$slug)->firstOrFail();


        //forma de hacerlo in-line
        return view('post', ['post' => Post::where('slug', $slug)->firstOrFail()]
        );
    }
}
