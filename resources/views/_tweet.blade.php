<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-400' }}">
  <div class="mr-2 flex-shrink-0">
    <img class="rounded-full mr-2 border border-b-gray-700" src="{{$tweet->user->avatar}}" alt="" width="50">
  </div>
  <div class="p-4">

    <h5 class="font-bold mb-4">
      <a href="{{route('profile', $tweet->user->username)}}">
        {{$tweet->user->name}}
      </a>
    </h5>

    <p class = "text-sm mb-3">
       {{$tweet->body}}
    </p>
    <x-like-buttons :tweet="$tweet"/>

 </div>
</div>
