@extends('template-layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @foreach($articles as $article)
                <div id="content">
                    <a class="title">
                        <h2>
                            <a href="/articles/{{$article->id}}">
                                {{$article->title}}
                            </a>
                        </h2>

                        <p><img src="{{asset("images/banner.jpg")}}" alt="" class="image image-full"/></p>
                    </a>

                    {!! $article->excerpt !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection