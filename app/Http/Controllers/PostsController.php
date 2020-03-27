<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Here is my First post',
            'my-second-post' => 'This is my second post'
        ];
//Si no encuentra la key correspondiente, mostrara un error 404
        if (!array_key_exists($post, $posts)) {
            abort(404, 'No post was found');
        }
//Si encuentra la key correspondiente, abrira una vista con el contenido
        return view('post', ['post' => $post]
        );
    }

}
