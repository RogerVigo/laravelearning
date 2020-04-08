@extends('template-layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse($articles as $article)
                <div id="content">
                    <a class="title">
                        <h2>
                            <a href="{{route('articles.show',$article)}}">
                                {{$article->title}}
                            </a>
                        </h2>

                        <p><img src="{{asset("images/banner.jpg")}}" alt="" class="image image-full"/></p>
                    </a>

                    {!! $article->excerpt !!}
                </div>
            @empty
                <p>No relevant Articles yet.</p>

            @endforelse
        </div>
    </div>
@endsection