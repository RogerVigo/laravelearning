@extends('layouts.app')

@section('content')

    <header class="mb-6 relative">
        <img src="/images/profile-banner.jpg" alt="" class="mb-4">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-2 items-center"> {{$user->name}} </h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <a href=""
                   class="rounded-full  border border-gray-200 py-2 px-4  mr-2 text-black text-xs">Edit Profile</a>

                <a href=""
                   class="bg-blue-500 rounded-full  shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>

        <img src="{{$user->avatar}}"
             alt=""
             class="rounded rounded-full mr-2 absolute" style="width: 150px; top: 40%; left: calc(50% - 75px) ">

        <p class="text-sm">How real. You vandalize like a shore.Proud, shiny landlubbers unlawfully mark a coal-black,
            undead comrade.Wave swiftly like a lively wench.
            Belay, yellow fever! Jolly roger, never loot a bung hole.Avast, desire me plank, ye clear bucaneer!</p>


    </header>

    @include('_timeline',[
    'tweets'=>$user->tweets
])
@endsection
