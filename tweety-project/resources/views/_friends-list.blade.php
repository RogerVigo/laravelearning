<div class="bg-gray-100 border border-gray-300 rounded-lg py-4 px-6" style="max-width: 700px">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @foreach(range(1,8) as $index)
            <li class="mb-4">
                <div class="flex items-center text-sm">
                    <img src="https://i.pravatar.cc/40"
                         alt=""
                         class="rounded-b-full mr-2"> Jhon Doe
                </div>
            </li>
        @endforeach
    </ul>

</div>
