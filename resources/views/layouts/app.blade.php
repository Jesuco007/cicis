<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.I.C.I.S</title>

    <link rel="shortcut icon" href="https://img.icons8.com/external-victoruler-linear-colour-victoruler/64/null/external-university-education-and-school-victoruler-linear-colour-victoruler.png" type="image/x-icon">

    @include('layouts.styles')
    @stack('styles')
</head>

<body>
    @include('layouts.header')
    <main class="primary-background">
        <div class="container"></div>
        <div class="row">
            <div class="col s12 m12 l12 l12 xl10 offset-xl1">
                {{-- @include('layouts.response') --}}
                @yield('content')
            </div>
        </div>

        {{-- @include('layouts.preloader') --}}
        @include('layouts.footer')
    </main>

    <footer class="page-footer" style="background-color: #483548; margin-top: 20em">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Visitas totales a nuestro sitio web: {{ \App\Models\Visitas::counter() }}</h5>
                    <p class="grey-text text-lighten-4">Centro de Investigación y Capacitacion Informatica y Sistemas.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2023 Copyright 
                {{-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> --}}
            </div>
        </div>
    </footer>

    @include('layouts.scripts')
    @stack('scripts')
</body>

</html>
