<div class="flex py-4 {{$loop->last ? '':'border-b border-gray-400'}}">
    <div class="mr-5 flex-shrink-0">
        <a href="{{$tweet->user->path()}}">
            <img src="/storage/avatars/{{ $tweet->user->avatar }}"
                 alt=""
                 class="rounded-full ml-2"
                 width="50"
                 height="50">
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{$tweet->user->path()}}">
                {{$tweet->user->name}}
            </a>
        </h5>

        <p class="text-sm"> {{$tweet->body}}</p>
    </div>
</div>
