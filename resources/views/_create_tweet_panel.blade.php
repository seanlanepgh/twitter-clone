<div class=" border border-blue-400 rounded-lg py-6 px-8 mb-8">
  <form method="POST" action="/tweets">
    @csrf
      <textarea name="body" class="w-full p-8" placeholder="What are you going to tweet today ?" required></textarea>
      <span id='counter'></span>
      <hr class="my-4">
      <footer class="flex justify-between items-center">
        <img class="rounded-full mr-2 border border-b-gray-700" src="{{auth()->user()->avatar}}" alt="" style="width:50px;height:50px;">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10">Create Tweet</button>
      </footer>
  </form>
  @error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
  @enderror
</div>
<script type="application/javascript">
$(document).ready(function() {
  $('textarea').keypress(function(){

      if(this.value.length >= 255){
          return false;
      }

      $("#counter").html("Remaining characters : " + (255 - this.value.length));
  });
});
</script>
