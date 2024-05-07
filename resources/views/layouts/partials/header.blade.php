<style>

    @media(min-width: 576px) {
        .bar-grande {
            display: block;
        }

        .bar-chica {
            display: none;
        }
    }

    @media(min-width: 0px) and (max-width: 576px) {
        .bar-grande {
            display: none;
        }

        .bar-chica {
            display: block;
        }
    }

</style>

<header>
    <div class="container-fluid" id="navbar-principal">
        <div class="row">
            <div class="col position-relative">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-6 d-flex align-items-center justify-content-center text-center" style="height: 10rem;">
                        <img src="{{ asset('img/photos/header/logo-sin-fondo.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col bar-grande">
                        <div class="row" style="border-bottom: 3px solid #639BE8;">
                            <div class="col-lg-3 col-md-12 py-lg-3 py-md-2"></div>
                            <div class="col-lg-9 col-md-12 py-lg-3 py-md-2">
                                <div class="row">
                                    <div class="col-lg-11 col-md-12 mx-auto">
                                        <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-3 text-white">
                                                <i class="bi bi-whatsapp fs-3 px-1"></i>
                                                <i class="bi bi-facebook fs-3 px-1"></i>
                                                <i class="bi bi-instagram fs-3 px-1"></i>
                                            </div>
                                            <div class="col-3 fs-5 text-white fw-bolder">
                                                @if (Route::has('login'))
                                                    @auth
                                                        @if(Auth::user()->role_as == 1)
                                                            <a class="nav-link" href="{{ url('/homeA') }}">Administrador</a>
                                                        @else // Rol 0 = user
                                                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                                        @endif
                                                    @else
                                                        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>  
                                                    @endauth
                                                @endif
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <button class="btn btn-outline border-white py-3    | fs-5 fw-bolder text-white w-100">Rastrear Guía</button>
                                            </div>
                                            <div class="col-lg-3 col-md-2 text-center text-white">
                                                {{-- <div class="bi bi-list display-5"></div> --}}
                                                <button type="button" onclick="activarModal()" class="btn btn-outline border-0 boton-menu">
                                                    <img src="{{ asset('img/photos/header/menubg.png') }}" alt="" class="img-fluid">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col bar-chica">
                        <div class="row">
                            <div class="col d-flex align-items-center justify-content-center"  style="height: 10rem;">
                                <a href="#/" class="btn btn-outline border-0 boton-menu">
                                    <img src="{{ asset('img/photos/header/menubg.png') }}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 position-absolute shadow-lg top-0 end-0" id="modal-menu" style="height: 40rem; margin-top: 7.1rem; z-index: 999;">
                    <div class="row">
                        <div class="col-md-2 col-8 bg-transparent" style="background-color: #003867;"></div>
                        <div class="col-md-10 col-4 text-center py-5" style="background-color: #003867; border-top: 3px solid #639BE8;">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    
    var menu_modal = document.getElementById('modal-menu');
    menu_modal.style.display = 'none';
    var navbar_principal = document.getElementById('navbar-principal');
    navbar_principal.style.backgroundColor = '#3567AC';

    function activarModal() {
        if(menu_modal.style.display == 'block') {
            menu_modal.style.display = 'none';
            navbar_principal.style.backgroundColor = '#3567AC';
        } else {
            menu_modal.style.display = 'block';
            navbar_principal.style.backgroundColor = '#003867';
        }
        
    }

    
</script>


