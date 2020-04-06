<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'excerpt', 'body']; //Si te da igual lo que se vaya a guardar, dejar un array vacio.

    function path()
    {
        return route('articles.show', $this);
    }
}
