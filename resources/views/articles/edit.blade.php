@extends('template-layout')
@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.1/css/bulma.css" rel="stylesheet">
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h2 class="heading has-text-weight-bold is-size-4">Update Article</h2>
            <form action="/articles/{{$article->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="title">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                    </div>
                </div>


                <div class="field">
                    <label for="excerpt">Excerpts</label>
                    <div class="control">
                        <input class="input" type="text" name="excerpt" id="excerpt" value="{{$article->excerpt}}">
                    </div>
                </div>


                <div class="field">
                    <label for="body">Body</label>
                    <div class="control">
                        <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection