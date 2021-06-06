<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('images/logo.ico') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container col-md-10">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img class="ml-0 d-block" src="{{URL('/images/logo.png')}}" style="width: 25%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                <li class="nav-item mx-3">
                                    <a class="nav-link text-white btn btn-primary text-white font-weight-bolder px-3 py-2" href="{{ route('login') }}">Inicia sesión</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                    <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
                                        <ul class="navbar-nav">
                                           <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-primary text-white font-weight-bolder px-3 py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    Regístrate
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('nuevoCandidato') }}">{{ __('Registro candidatos') }}</a>
                                                        <a class="dropdown-item" href="{{ route('nuevaEmpresa') }}">{{ __('Registro empresas') }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                @if(auth()->user()->tipo == 'Empresa')
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-outline-secondary btn-lg text-primary font-weight-bolder px-3 py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{-- $empresa->empresa --}} {{ Auth::user()->email }}
                                    </a>
                                @elseif(auth()->user()->tipo == 'Candidato')
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-outline-secondary btn-lg text-primary font-weight-bolder px-3 py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{-- $candidato->nombre --}} {{ Auth::user()->email }}
                                    </a>
                                @endif
                                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                    @if(auth()->user()->tipo == 'Empresa')
                                        <a class="dropdown-item text-primary font-weight-bolder" href="{{ route('perfilEmpresa') }}">Perfil</a>
                                        <a class="dropdown-item text-primary font-weight-bolder" href="{{ route('listarOfertasPublicadas') }}">Ofertas publicadas</a>
                                    @elseif(auth()->user()->tipo == 'Candidato')
                                        <a class="dropdown-item text-primary font-weight-bolder" href="{{ route('perfilCandidato') }}">Perfil</a>
                                        <a class="dropdown-item text-primary font-weight-bolder" href="{{ route('listarOfertas') }}">Ofertas publicadas</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            @include('layouts.session-status')

            <main class="py-5">
                @yield('content')
            </main>

            <footer class="table-secondary shadow rounded w-100 mt-5" style="position: fixedM; bottom: 0">
                <div class="text-center p-1 text-primary" >
                    © COPYRIGHT MARC SANTOLARIA - 2021
                </div>
            </footer>
        </div>
    </body>
</html>