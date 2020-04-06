@extends('template-layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.1/css/bulma.css">
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h2 class="heading has-text-weight-bold is-size-4">Article</h2>
            <form action="/articles" method="POST">
                @csrf
                <div class="field">
                    <label for="title">Title</label>
                    <div class="control">
                        <input class="input {{$errors->has('title') ? 'is-danger':''}}" type="text" name="title"
                               id="title" value="{{old('title')}}">
                        @if($errors->has('title'))
                            <p class="help is-danger"> {{$errors ->first('title')}}</p>
                        @endif
                    </div>
                </div>


                <div class="field">
                    <label for="excerpt">Excerpts</label>
                    <div class="control">
                        <input class="input {{$errors->has('excerpt') ? 'is-danger':''}}" type="text" name="excerpt"
                               id="excerpt" value="{{old('excerpt')}}">
                        @if($errors->has('excerpt'))
                            <p class="help is-danger"> {{$errors ->first('excerpt')}}</p>
                        @endif
                    </div>
                </div>


                <div class="field">
                    <label for="body">Body</label>
                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" name="body"
                                  id="body">{{old('body')}}</textarea>
                        @error('body')
                        <p class="help is-danger"> {{$errors ->first('body')}}</p>
                        @enderror
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