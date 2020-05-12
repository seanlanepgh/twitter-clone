<x-app>
  @foreach($users as $user)
  <a href="{{route('profile', $user->username)}}" class="flex items-center mb-5">
    <img src="{{$user->avatar}}" alt="{{$user->username}}'s avatar'" width="60" class="mr-4 rounded-full border border-gray-700">
    <div>
      <h4 class="font-bold">{{'@'.$user->username}}</h4>
    </div>
  </a>
  @endforeach

</x-app>
