<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;

        } else {
            $articles = Article::latest()->get();
        }


        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        //dd(request()->all());
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        //validation

        /*
        $articleValidated=$this->validateArticle();
        $articleValidated['user_id']=1;
        Article::create($articleValidated);
        */

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();
        $article->tags()->attach(request('tags'));

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
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
