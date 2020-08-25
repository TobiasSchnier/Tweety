<ul>
  <li>
    <a
    href="{{route('home')}}"
    class="font-bold text-lg mb-4 block">
    HOME</a>
  </li>

  <li>
    <a
    href="/explore"
    class="font-bold text-lg mb-4 block">
    Explore</a>
  </li>

  
  <li>
    <a
    href="{{route('profile', auth()->user())}}"
    class="font-bold text-lg mb-4 block">
    Profile</a>
  </li>

  <li>
        <a
        class="font-bold text-lg mb-4 block"
        href="{{route('logout')}}"> Logout</a>
  </li>
</ul>
