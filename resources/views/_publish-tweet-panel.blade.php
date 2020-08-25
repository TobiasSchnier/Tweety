<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
  <form
    class=""
    action="/tweets"
    method="POST">
    @csrf

      <textarea
        name="body"
        class="w-full"
        placeholder="Whats up doc?"
        required
      ></textarea>

      <hr class="m-4">

      <footer class="flex justify-between">
        <img
          src="{{auth()->user()->avatar}}"
          alt="Your Avatar"
          class="rounded-full mr-2"
          height="50"
          width="50"
          >


          <button
            type="submit"
            name="button"
            class="bg-blue-500 rounded-lg shadow px-10 text-white h-10 hover:bg-blue-700"
          >Send it</button>
      </footer>
  </form>

  @error ('body')
    <p class="text-red-800 text-sm mt-2">
      {{$message}}
    </p>
  @enderror
</div>
