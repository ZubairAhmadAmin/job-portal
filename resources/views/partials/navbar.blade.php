<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">Job Portal</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jobs.index') }}">My Jobs</a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">@csrf
              <button class="btn btn-link nav-link">Logout</button>
            </form>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

