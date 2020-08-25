<x-master>



@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
                <div class="card-header font-bold mb-6">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                            class="border border-gray-400 p-2 w-full"
                            autocomplete="email"
                            value="{{old('email')}}"
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
                            autocomplete="current-password"
                            >

                          @error ('password')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                          <div class="">
                            <input
                              type="checkbox"
                              name="remember"
                              class="mr-1"
                              {{old('remember')? 'checked':''}}
                              >

                            <label
                              for="remember"
                              class="text-xs text-gray-700 font-bold uppercase"
                            >
                              Remember Me
                            </label>
                          </div>
                          @error ('remember')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                          @enderror
                        </div>

                        <div>
                          <button
                            type="submit"
                            name="button"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-700 mr-2"
                            >
                              Submit
                          </button>

                          <a
                            href="{{route('password.request')}}"
                            class="text-xs text-gray-700 "
                          >Forgot your password?</a>



                        </div>
                      </div>
                  </div>
              </form>
        </div>
    </div>
</div>
</x-master>
