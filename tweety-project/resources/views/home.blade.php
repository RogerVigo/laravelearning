@extends('layouts.app')

@section('content')
    <div class="lg:flex justify-between">
        <div class="lg:w-32" style="max-width: 700px">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include('_publish-tweet-panel')
            <div class="border border-gray-300 rounded-lg">
                @foreach($tweets as $tweet)
                    @include('_tweet')
                @endforeach

            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-400 rounded-lg p-4" style="max-width: 700px">
            @include('_friends-list')
        </div>
    </div>
@endsection
