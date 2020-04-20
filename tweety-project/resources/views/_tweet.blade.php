<div class="flex py-4 border-b border-gray-500">
    <div class="mr-2 flex-shrink-0">
        <img src="{{auth()->user()->avatar}}"
             alt=""
             class="rounded-b-full mr-2">
    </div>

    <div>
        <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>

        <p class="text-sm"> {{$tweet->body}}</p>
    </div>
</div>
