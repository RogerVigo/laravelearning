<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'excerpt', 'body', 'user_id']; //Si te da igual lo que se vaya a guardar, dejar un array vacio.

    function path()
    {
        return route('articles.show', $this);
    }

    function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
