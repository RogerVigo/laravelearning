@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Page Not Found'))

@section('image')
    <div class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
        <img src="images/404-error.png" alt="" style="width: 100%; height: 100%;">
    </div>
@endsection

@section('message', __('Sorry, the page you are looking for could not be found.'))
