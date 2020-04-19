@extends('layouts.app')

@section('content')

    profile {{$user->name}}

    <hr>

    @include('_timeline',[
    'tweets'=>$user->tweets
])
@endsection
