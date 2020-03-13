<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
    <ul class="navbar-nav justify-content-end">
      @if (Auth::check())
        <li class="nav-item"><a href="#" class="nav-link">User list</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">User center</a>
            <a href="#" class="dropdown-item">Edit profile</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="logout">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-block btn-danger" name="button">Log out</button>
              </form>
            </a>
          </div>
        </li>
      @endif
      <li class="nav-item"><a href="{{ route('help') }}" class="nav-link">Help</a></li>
      <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
    </ul>
  </div>
</nav>
