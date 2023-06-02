 <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('about') }}">About Us</a>
            </li>
            <li class="nav-item {{ Request::is('doctors') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('doctors') }}">Doctors</a>
            </li>
            <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('blog') }}">News</a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
            @guest
                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Se Connecter</a>
                @if (Route::has('register'))
                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">S'inscrire</a>
                @endif
            @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary ml-lg-3">Déconnexion</button>
                </form>
            @endguest
            </li>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>