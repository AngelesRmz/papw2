<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/canal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/land.css') }}" rel="stylesheet">
    <link href="{{ asset('css/subirVideo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

    <title>TreasureBox</title>
</head>
<body>
<header>

 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top  shadow">
        {{-- navbar navbar-expand-lg navbar-dark bg-transparent fixed-top scrolling-navbar --}}
    <div class="container">
        <a class="navbar-brand" href="{{ url('/Inicio') }}">
            <img src="/images/logo.png" height="40" alt="mdb logo">
        </a>
        <a class="navbar-brand" href="{{ url('/Inicio') }}">
            <strong>TreasureBox</strong>
        </a>
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Programación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Animación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Edición</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Modelado</a>
            </li>
        </ul> 
        <ul class="navbar-nav ml-auto">
            <ul class="navbar-nav mr-auto">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
            <ul></ul>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    {{-- <ul class="navbar-nav mr-auto"> --}}
                        {{-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="far fa-file-video fa-2x"></i></button> --}}
                        <a class="nav-link" href="{{ url('/upload')}}" data-offset="90"><i class="far fa-file-video fa-2x"></i></a>
                    {{-- </ul> --}}
                    <li class="nav-item">
                        <img src="/storage/userPics/{{Auth::user()->fileAvatar}}" alt="Avatar" class="avatar list-inline-item">
                    </li>
                    <li class="nav-item dropdown">
                        
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('mychannel') }}"> {{ __('My channel') }} </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </li>
            @endguest
        </ul>
         
    </div>
</nav>

@yield('land')
@yield('inicio')
@yield('upload')
@yield('canalUsuario')
    {{--@yield('land') 
     @yield('inicio')
    @yield('canalUsuario') --}} 

    
</header>
    
</body>

</html>







    {{-- @yield('content') --}}


