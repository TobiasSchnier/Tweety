@if (current_user()->isNot($user))



  <form
    class=""
    action="{{route('follow', $user->username)}}"
    method="POST">
    @csrf
      <button
        href="#"
        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
        type="submit"
      >
      {{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
  </form>


@endif
