{{-- @auth
    <header>
        @include('layouts.menu-sidenav')
    </header>
@endauth --}}

<nav class="navbar nav-extended no-padding">
    <div class="nav-wrapper">
        @auth
            {{-- <a href="{{ route('home') }}" class="brand-logo center hide-on-small-only">C.I.C.I.S.</a> --}}
            <ul id="nav-mobile" class="right">
                <li><a href="{{ url('/home') }}" class="right"><strong>Home</strong></a></li>
                <li><a href="{{ route('buscador') }}"><i class="material-icons">search</i></a></li>
                <li><a id="dark-mode-toggle" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
                @foreach (auth()->user()->roles as $modulo)
                <li><a href="{{ route($modulo->nombre_largo.'.index') }}">{{ $modulo->nombre_corto }}</a></li>
                @endforeach
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="material-icons left">exit_to_app</i>Salir</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf

                    </form>
                </li>
                <li>
                    <a href="#" role="button">
                        {{ Auth::user()->name.' | '.Auth::user()->tipo }}
                    </a>
                </li>
            </ul>
            {{-- <a href="#!" data-target="sidenav-left" class="sidenav-trigger left show-on-medium-and-up"><i
                    class="material-icons dark-primary-color-icon">menu</i></a> --}}
        @else
            <ul>
                <li><a id="dark-mode-toggle" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
                <li><a href="{{ route('login') }}">Log in</a></li>
            </ul>


            {{-- @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif --}}
        @endauth

        @yield('breadcrumb')
    </div>
</nav>



<ul id="tema" class="dropdown-content">
    <li><a id="lightmode-old" href="#!">Adultos Dia</a></li>
    <li><a id="darkmode-old" href="#!">Adultos Noche</a></li>
    <li><a id="lightmode-young" href="#!">Jóvenes</a></li>
    <li><a id="lightmode-child" href="#!">Niños</a></li>
</ul>
