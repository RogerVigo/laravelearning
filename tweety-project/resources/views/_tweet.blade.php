<div class="flex py-4 border-b border-gray-500">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile', $tweet->user->name)}}">
            <img src="{{$tweet->user->avatar}}"
                 alt=""
                 class="rounded-b-full mr-2">
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{route('profile', $tweet->user->name)}}">
                {{$tweet->user->name}}
            </a>
        </h5>

        <p class="text-sm"> {{$tweet->body}}</p>
    </div>
</div>
