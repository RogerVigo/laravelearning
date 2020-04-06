<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        //validation

        request()->validate([
            'title' => 'required',
            'excerpt' => ['required', 'min:3', 'max:5'],//requirido obligatorio con minimo de 3 chars y maximo de 5 chars
            'body' => 'required'
        ]);


        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles'); //redirige a la pagina indicada una vez se guarden los datos
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', compact('article')); //revisar funcion compact
    }

    public function update($id)
    {

        request()->validate([
            'title' => 'required',
            'excerpt' => ['required', 'min:3', 'max:5'],//requirido obligatorio con minimo de 3 chars y maximo de 5 chars
            'body' => 'required'
        ]);

        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' . $article->id);

    }
}
