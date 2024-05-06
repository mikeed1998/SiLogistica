<header>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col text-end bg-dark py-2">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            @if(Auth::user()->role_as == 1) // Rol 1 = admin
                                <a class="btn btn-sm btn-light" href="{{ url('/homeA') }}">Administrador</a>
                            @else // Rol 0 = user
                                <a class="btn btn-sm btn-light" href="{{ url('/home') }}">Home</a>
                            @endif
                        @else
                            <a class="btn btn-sm btn-light" href="{{ route('login') }}">Iniciar sesión</a>
        
                            @if (Route::has('register'))
                                <a class="btn btn-sm btn-light" href="{{ route('register') }}">Crear cuenta</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>





{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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
</nav> --}}