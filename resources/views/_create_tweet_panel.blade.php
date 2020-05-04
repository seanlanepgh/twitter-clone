<div class=" border border-blue-400 rounded-lg py-6 px-8 mb-8">
  <form method="POST" action="/tweets">
    @csrf
      <textarea name="body" class="w-full p-8" placeholder="What are you going to tweet today ?" required></textarea>
      <hr class="my-4">
      <footer class="flex justify-between">
        <img></img>
      <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Create Tweet</button>
    </footer>
  </form>
  @error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
  @enderror
</div>
