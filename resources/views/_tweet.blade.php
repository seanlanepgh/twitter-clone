<div class="{{$loop->last ? '' : 'border-b border-b-gray-400' }}">
  @can ('edit', $tweet->user)

        <form method="POST" action="/tweets/{{$tweet->id}}/delete">
          @csrf
          @method('DELETE')
          <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white text-xs m-1" style="float:right;"> Delete</button>
        </form>
  @endcan
  <div class="flex p-4">
    <div class="mr-2 flex-shrink-0">
      <img class="rounded-full mr-2 border border-b-gray-700" src="{{$tweet->user->avatar}}" alt="" width="50">
    </div>
    <div class="p-4" style="max-width:600px;">
      <h5 class=" font-bold mb-4">
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
</div>
<script>

</script>
