@can('edit',$user)
    <div>
        <a href="{{$user->path('edit')}}"
           class="rounded-full  border border-gray-200
           py-2 px-4  mr-2 text-black text-xs">
            Edit Profile
        </a>
    </div>
@endcan
