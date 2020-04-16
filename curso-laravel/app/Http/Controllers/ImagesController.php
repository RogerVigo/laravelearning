<?php

namespace App\Http\Controllers;

class ImagesController extends Controller
{
    function show($id)
    {
        $images = Images::find($id);

        //return view('articles.show',['article'=>$article]);
    }
}
