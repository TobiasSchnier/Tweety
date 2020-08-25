<x-app >
  <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <!-- NAME -->
    <div class="mb-6">
      <label
        for="name"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
      >
      Name
      </label>

      <input
        type="text"
        name="name"
        id="name"
        class="border border-gray-400 p-2 w-full"
        value= {{$user->name}}
        required
        >

      @error ('name')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
      @enderror
    </div>

    <!-- USERNAME -->
    <div class="mb-6">
      <label
        for="username"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
      >
      Username
      </label>

      <input
        type="text"
        name="username"
        id="username"
        class="border border-gray-400 p-2 w-full"
        value= {{$user->username}}
        required
        >

      @error ('username')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
      @enderror
    </div>

    <!-- AVATAR -->
    <div class="mb-6">
        <label
          for="avatar"
          class="block mb-2 uppercase font-bold text-xs text-gray-700"
        >
        Avatar
        </label>
        <div class="flex">
        <input
          type="file"
          name="avatar"
          id="avatar"
          class="border border-gray-400 p-2 w-full"
          >

          <img
            src="{{$user->avatar}}"
            alt="your Avatar"
            width="50"
            >


      </div>

      @error ('avatar')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
      @enderror
    </div>







    <!-- EMAIL -->
    <div class="mb-6">
      <label
        for="email"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
      >
      Email
      </label>

      <input
        type="email"
        name="email"
        id="email"
        value= {{$user->email}}
        class="border border-gray-400 p-2 w-full"
        >

      @error ('email')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
      @enderror
    </div>

      <!-- PASSWORD -->
      <div class="mb-6">
        <label
          for="password"
          class="block mb-2 uppercase font-bold text-xs text-gray-700"
        >
        Password
        </label>

        <input
          type="password"
          name="password"
          id="password"
          class="border border-gray-400 p-2 w-full"
          required
          >

        @error ('password')
          <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
      </div>
        <!-- CONFIRM PASSWORD -->
        <div class="mb-6">
          <label
            for="password_confirmation"
            class="block mb-2 uppercase font-bold text-xs text-gray-700"
          >
          Password Confirmation
          </label>

          <input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            class="border border-gray-400 p-2 w-full"
            required
            >

          @error ('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <button
            type="submit"
            name="button"
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-700 mr-4"
            >
              Submit
          </button>

          <a
            href="{{$user->path()}}"
            class="hover:underline"
            >
              Cancel
          </a>
        </div>






  </form>

</x-app>
