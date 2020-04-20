<?php

namespace App\Http\Controllers;

use App\Tweet;
use function request;

class TweetsController extends Controller
{
    public function store()
    {
        $tweetAtribute = request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $tweetAtribute['body']
        ]);

        return redirect('/home');
    }
}
