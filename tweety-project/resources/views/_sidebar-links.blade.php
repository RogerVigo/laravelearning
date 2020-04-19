<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block ml-20"
            href="{{route('home')}}"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block ml-20"
            href="/explore"
        >
            Explore
        </a>
    </li>
    <li>
        <a
            class="font-bold text-lg mb-4 block ml-20"
            href="{{route('profile',auth()->user())}}"
        >
            Profile
        </a>
    </li>

</ul>
