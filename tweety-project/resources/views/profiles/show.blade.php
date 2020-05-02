<x-app>

    <header class="mb-6 relative">

        <div class="relative">
            <img src="/images/profile-banner.jpg" alt="" class="mb-4">
            <img src="/storage/avatars/{{ $user->avatar }}"
                 alt=""
                 class="rounded rounded-full mr-2 absolute bottom-0 transform translate-y-1/2 -translate-x-1/2 "
                 width="150px" style="left: 50%">
        </div>

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-2 items-center"> {{$user->name}} </h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                <x-editprofile-button :user="$user"></x-editprofile-button>
                <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>


        <p class="text-sm">How real. You vandalize like a shore.Proud, shiny landlubbers unlawfully mark a coal-black,
            undead comrade.Wave swiftly like a lively wench.
            Belay, yellow fever! Jolly roger, never loot a bung hole.Avast, desire me plank, ye clear bucaneer!</p>


    </header>

    @include('_timeline',[
    'tweets'=>$user->tweets
])

</x-app>
