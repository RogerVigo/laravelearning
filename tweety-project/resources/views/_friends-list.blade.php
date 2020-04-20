<div class="bg-gray-100 border border-gray-300 rounded-lg py-4 px-6" style="max-width: 700px">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="mb-4">
                <div>
                    <a href="{{route('profile', $user->name)}}" class="flex items-center text-sm">
                        <img src="{{$user->avatar}}"
                             alt=""
                             class="rounded mr-2"
                             width="40"
                             height="40">

                        {{$user->name}}
                    </a>
                </div>
            </li>
        @empty
            <p class="text-sm-center font-black">No Friends yet</p>
        @endforelse
    </ul>
</div>
