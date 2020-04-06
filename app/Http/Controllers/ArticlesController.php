<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
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

        Article::create($this->validateArticle());


        return redirect(route('article.index')); //redirige a la pagina indicada una vez se guarden los datos
    }

    public function edit(Article $article)
    {


        return view('articles.edit', compact('article')); //revisar funcion compact
    }

    public function update(Article $article)
    {

        $article->update($this->validateArticle());


        return redirect(route($article->path()));

    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => ['required', 'min:3', 'max:5'],//requirido obligatorio con minimo de 3 chars y maximo de 5 chars
            'body' => 'required'
        ]);
    }
}
