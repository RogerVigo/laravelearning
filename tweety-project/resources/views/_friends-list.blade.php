<div class="bg-gray-100 border border-gray-300 rounded-lg py-4 px-6" style="max-width: 700px">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @foreach(auth()->user()->follows as $user)
            <li class="mb-4">
                <div class="flex items-center text-sm">
                    <img src="{{$user->avatar}}"
                         alt=""
                         class="rounded-b-full mr-2">
                    {{$user->name}}
                </div>
            </li>
        @endforeach
    </ul>

</div>
