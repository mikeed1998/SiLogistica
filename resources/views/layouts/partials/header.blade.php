<style>

    @media(min-width: 992px) { 
        .linea-superior { border-top: 3px solid #639BE8; }
    }


    @media(min-width: 576px) { 
        .bar-grande { display: block; }
        .bar-chica { display: none; }
        .inicio-grande { display: block; }
        .inicio-chico { display: none; }
        .linea-superior_servicios { border-top: 3px solid #639BE8; }
    }

    @media(min-width: 576px) and (max-width: 992px) {
        .linea-superior { border: none; }
    }

    @media(min-width: 0px) and (max-width: 576px) {
        .bar-grande { display: none; }
        .bar-chica { display: block; }
        .inicio-grande { display: none; }
        .inicio-chico { display: block; }
        .linea-superior_servicios { border-top: none; }
    }

    .accordion-content {
        display: none;
    }

    .accordion-content.show {
        display: block;
    }

    .link-header {
        text-decoration: none;
        color: #FFFFFF;
    }

    .link-header:hover {
        color: #639BE8;
    }


</style>

<header>
    <div class="container-fluid" id="navbar-principal">
        <div class="row">
            <div class="col position-relative">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-6 d-flex align-items-center justify-content-center text-center" style="height: 10rem;">
                        <a href="{{ route('front.home') }}">
                            <img src="{{ asset('img/photos/header/logo-sin-fondo.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col bar-grande">
                        <div class="row" style="border-bottom: 3px solid #639BE8;">
                            <div class="col-lg-3 col-md-12 py-lg-3 py-md-2"></div>
                            <div class="col-lg-9 col-md-12 py-lg-3 py-md-2">
                                <div class="row">
                                    <div class="col-lg-11 col-md-12 mx-auto">
                                        <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-3 text-white">
                                                <a href="#/" class="text-decoration-none px-1">
                                                    <i class="bi bi-whatsapp text-white fs-4"></i>
                                                </a>
                                                <a href="#/" class="text-decoration-none px-1">
                                                    <i class="bi bi-facebook text-white fs-4"></i>
                                                </a>
                                                <a href="#/" class="text-decoration-none px-1">
                                                    <i class="bi bi-instagram text-white fs-4"></i>
                                                </a>
                                            </div>
                                            <div class="col-3 fs-5 text-white fw-bolder">
                                                @if (Route::has('login'))
                                                    @auth
                                                        @if(Auth::user()->role_as == 1)
                                                            <a class="nav-link text-center" href="{{ url('/homeA') }}">Administrador</a>
                                                        @else
                                                            <a class="nav-link text-center" href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                                                        @endif
                                                    @else
                                                        <a class="nav-link text-center" href="{{ route('login') }}">Iniciar sesión</a>  
                                                    @endauth
                                                @endif
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <button class="btn btn-outline border-white py-2 fs-5 fw-bolder text-white w-100">Rastrear Guía</button>
                                            </div>
                                            <div class="col-lg-3 col-md-2 text-center text-white">
                                                <button type="button" onclick="activarModal(1)" class="btn btn-outline border-0 boton-menu">
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
                                <button type="button" onclick="activarModal(1)" class="btn btn-outline border-0 boton-menu">
                                    <img src="{{ asset('img/photos/header/menubg.png') }}" alt="" class="img-fluid">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 position-absolute shadow-lg top-0 end-0" id="modal-menu" style="height: 40rem; margin-top: 7.1rem; z-index: 999;">
                    <div class="row">
                        <div class="inicio-grande col-md-2 col-8 mt-4" style="background-color: #003867;"></div>
                        <div class="inicio-grande col-md-10 col-4 text-center py-3 display-4 text-white linea-superior" style="background-color: #003867;">
                            <div class="col-9 text-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('front.home') }}" class="link-header">INICIO</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="inicio-chico col-12 text-center py-3 display-4 text-white" style="margin-top: 1.20rem; background-color: #003867; border-top: 3px solid #639BE8;">
                            <a href="{{ route('front.home') }}" class="link-header">INICIO</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a class="row" href="#/" style="text-decoration: none; color: #FFFFFF;" id="toggleAccordion">
                                <div class="col-lg-1 col-md-2 col-12" style="background-color: #003867; border-top: 3px solid #639BE8;"></div>
                                <div class="col-lg-10 col-md-8 col-12 text-center py-3 display-4 text-white" style="background-color: #003867; border-top: 3px solid #639BE8;">
                                    SERVICIOS
                                </div>
                                <div class="col-lg-1 col-md-2 col-12 d-flex align-items-center justify-content-center linea-superior_servicios" style="background-color: #003867;">
                                    <i class="bi bi-chevron-down fs-3 text-white"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="row text-center text-white" style="background-color: #003867;">
                                <div class="col-12 display-4 accordion-content">
                                    <a href="{{ route('front.servicio', ['servicio' => 1]) }}" class="link-header">UNO</a>
                                </div>
                                <div class="col-12 display-4 accordion-content">
                                    <a href="{{ route('front.servicio', ['servicio' => 2]) }}" class="link-header">DOS</a>
                                </div>
                                <div class="col-12 display-4 accordion-content">
                                    <a href="{{ route('front.servicio', ['servicio' => 3]) }}" class="link-header">TRES</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 text-center py-3 display-4 text-white" style="background-color: #003867; border-top: 3px solid #639BE8;">
                            <a href="{{ route('front.nosotros') }}" class="link-header">NOSOTROS</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center py-3 display-4 text-white" style="background-color: #003867; border-top: 3px solid #639BE8;">
                            <a href="{{ route('front.contacto') }}" class="link-header">CONTACTO</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center py-3 display-4 text-white" style="background-color: #003867; border-top: 3px solid #639BE8;">
                            RASTREAR GUÍA
                        </div>
                    </div>
                    <div class="row" style="background-color: #003867; border-top: 3px solid #639BE8;">
                        <div class="col-md-11 col-12 mx-auto text-center py-3 text-white" >
                            <div class="row">
                                <div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
                                    <div class="row mt-md-0 mt-2">
                                        <div class="col mx-auto">
                                            <img src="{{ asset('img/photos/header/correo_small.png') }}" alt="" class="img-fluid"> contacto@silogistica.com
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
                                    <div class="row mt-md-0 mt-2">
                                        <div class="col mx-auto">
                                            <img src="{{ asset('img/photos/header/telefono_small.png') }}" alt="" class="img-fluid"> TEL. 3322332233
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
                                    <div class="row mt-md-0 mt-2">
                                        <div class="col-lg-6 col-md-11 col-12 mx-auto text-md-end text-center">
                                            Av. Lazaro Cárdenas #33097 Chapalita C.P. 44500 Guadalajara, Jal.
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    function activarModal(x) {
        if(x == 1) {
            if(menu_modal.style.display == 'block') {
                menu_modal.style.display = 'none';
                navbar_principal.style.backgroundColor = '#3567AC';
            } else {
                menu_modal.style.display = 'block';
                navbar_principal.style.backgroundColor = '#003867';
            }
        } else if(x == 2) {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            if (menu_modal.style.display == 'block') {
                menu_modal.style.display = 'none';
                navbar_principal.style.backgroundColor = '#3567AC';
            } else {
                menu_modal.style.display = 'block';
                navbar_principal.style.backgroundColor = '#003867';
            }
        }
        
    }

    document.addEventListener('DOMContentLoaded', function() {
        const accordionToggle = document.getElementById('toggleAccordion');
        const accordionContent = document.querySelectorAll('.accordion-content');

        accordionToggle.addEventListener('click', function() {
            accordionContent.forEach(function(item) {
                item.classList.toggle('show');
            });
        });
    });


</script>




