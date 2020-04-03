<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
}
