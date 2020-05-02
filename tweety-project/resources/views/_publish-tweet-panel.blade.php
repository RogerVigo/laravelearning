<div class="border border-blue-400 rounded-l-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <label>
<textarea
    name="body"
    class="w-full"
    placeholder="Wazzup?"

></textarea>
        </label>
        <hr class="my-4">
        <footer class="flex justify-between">

            <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}"
                 alt="your avatar"
                 class="rounded-full mr-2"
                 width="50"
                 height="50">
            <p>{{auth()->user()->name}}</p>
            <button type="submit" class="bg-blue-500 rounded rounded-lg shadow py-2 px-2 text-white">
                Publish Tweet
            </button>
        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm">{{$message}}</p>
    @enderror
</div>
