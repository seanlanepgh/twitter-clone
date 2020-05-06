<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>

    @forelse(auth()->user()->follows as $user)
     <li class="mb-4">
          <div>
              <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                <img class="rounded-full mr-2 border border-b-gray-700" src="{{$user->avatar}}" alt="" width="40">
                {{$user->name}}
              </a>
          </div>
    </li>
    @empty
      <li> No friends yet </li>
    @endforelse
</ul>
