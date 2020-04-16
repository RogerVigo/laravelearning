<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    public function show($slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first(); //realizar php artisan config:clear si no
        // reconoce .env

        // dd($post); //->dump and die, se usa para debugg
        // $posts = [
        //   'my-first-post' => 'Here is my First post',
        // 'my-second-post' => 'This is my second post'
        //];
//Si no encuentra la key correspondiente, mostrara un error 404
        //  if (!array_key_exists($post, $post)) {
        //     abort(404, 'No post was found');
        // }
//Si encuentra la key correspondiente, abrira una vista con el contenido
        return view('post', ['post' => $post]
        );
    }

}
