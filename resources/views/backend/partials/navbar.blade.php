<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('assistance.dashboard') }}"><span class="text-primary">One</span>-Health</a>

        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown {{ Request::is('dossiers*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="dossiersDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dossiers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dossiersDropdown">
                        <li><a class="dropdown-item" href="{{ route('assistance.ordonnance.index') }}">Ordennances</a></li>
                        <li><a class="dropdown-item" href="{{ route('assistance.consultation.index') }}">Consultatios</a></li>
                    </ul>
                </li>
                <li class="nav-item {{ Request::is('/pations') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('assistance.pations.index') }}">Pations</a>
                </li>
                <li class="nav-item {{ Request::is('/doctors') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('assistance.doctors.index') }}">Doctors</a>
                </li>
                <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('assistance.RDV.index') }}">Rendez-vous</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="#">Paiements</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('home') }}">Visit Home</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>
