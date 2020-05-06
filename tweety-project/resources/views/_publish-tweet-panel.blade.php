<div class="border border-blue-400 rounded-l-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <label>
<textarea
    name="body"
    class="w-full"
    placeholder="Wazzup?"
    required

></textarea>
        </label>
        <hr class="my-4">
        <footer class="flex justify-between items-center">

            <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}"
                 alt="your avatar"
                 class="rounded-full mr-2"
                 width="50"
                 height="50">
            <p>{{auth()->user()->name}}</p>
            <button type="submit" class="bg-blue-400 rounded rounded-lg hover:bg-blue-600 shadow py-2 px-10 text-white text-sm-center">
                Publish Tweet
            </button>
        </footer>
    </form>

</div>
