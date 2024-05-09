@extends('layouts.app')

@section('title', 'Home')

@section('extracss')
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.20.8/dist/js/uikit-icons.min.js"></script>
    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('public/font/Poppins-Regular.ttf') format('truetype');
        }

        body {
            background-color: #3567AC; 
            font-family: 'Poppins', sans-serif;
        }

        .principal-slider {
            object-fit: contain; 
            width: 100%; 
            height: 40rem;
        }

        @media(min-width: 992px) {
            .principal-slider {
                height: 40rem;
            }

            .imagen-servicio {
                height: 16rem;
                border: 2px solid #D0382A;
                border-top-right-radius: 7rem;
                border-bottom-left-radius: 7rem;
            }
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .principal-slider {
                height: 20rem;
            }

            .imagen-servicio {
                height: 12rem;
                border: 2px solid #D0382A;
                border-top-right-radius: 5rem;
                border-bottom-left-radius: 5rem;
            }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .principal-slider {
                height: 10rem;
            }

            .imagen-servicio {
                height: 10rem;
                border: 2px solid #D0382A;
                border-top-right-radius: 4rem;
                border-bottom-left-radius: 4rem;
            }
        }

        .dot-btn {
            cursor: pointer;
        }

        .btn-azul {
            border: 2px solid #3567AC; 
            color: #3567AC;
        }

        .btn-azul:hover {
            border: 2px solid #3567AC; 
            color: #FFFFFF;
            background-color: #3567AC;
        }
    </style>
@endsection

@section('content')
    <section class="slider-principal py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="slider_imagenes">
                    <div>
                        <img class="principal-slider img-fluid" src="{{ asset('img/photos/home/slider_ejemplo.PNG') }}" alt="">
                    </div>
                    <div>
                        <img class="principal-slider img-fluid" src="{{ asset('img/photos/home/002-095-000.png') }}" alt="">
                    </div>
                    <div>
                        <img class="principal-slider img-fluid" src="{{ asset('img/photos/home/002-023.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="row">
                        <div class="col text-end">
                            <img src="{{ asset('img/photos/home/chevron-left.png') }}" alt="" class="prev-btn">
                        </div>
                        <div class="col dot-container"></div>
                        <div class="col text-start">
                            <img src="{{ asset('img/photos/home/chevron-right.png') }}" alt="" class="next-btn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-logos_container">
        <div class="container-fluid" style="background-color: #F6F6F6;">
            <div class="row text-center py-5 d-flex align-items-center justify-content-center">
                <div class="slider-logos">
                    <div class="col mx-auto">
                        <img src="{{ asset('img/photos/home/DHL.png') }}" alt="" class="img-fluid" style="width: 100%; height: 3rem; object-fit: contain;">
                    </div>
                    <div class="col mx-auto">
                        <img src="{{ asset('img/photos/home/FEDEX.png') }}" alt="" class="img-fluid" style="width: 100%; height: 3rem; object-fit: contain;">
                    </div>
                    <div class="col mx-auto">
                        <img src="{{ asset('img/photos/home/REDPACK.png') }}" alt="" class="img-fluid" style="width: 100%; height: 3rem; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion-nosotros bg-white py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <div class="row d-flex align-items-end justify-content-end">
                                <div class="col-lg-9 col-md-10 col-9 position-relative rounded" style="
                                    background-image: url('{{ asset('img/photos/home/nosotros.png') }}');
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    height: 36rem;
                                    ">
                                    <div class="col-lg-6 col-md-9 col-9 mt-5 ms-5 text-center fs-1 text-white position-absolute top-50 start-0 translate-middle py-3 border border-white border-5" style="background-color: #3567AC; line-height: 1; border-radius: 1rem;">
                                        <b class="fs-bolder">Logistica</b> Nacional
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="row">
                                <div class="col-11 mx-auto py-5 ">
                                    <div class="row">
                                        <div class="col fw-bolder" style="color: #3567AC;">
                                            SOBRE NOSOTROS
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col display-2 fw-bolder" style="color: #D0382A;">
                                            Empresa
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col display-2 fw-bolder" style="color: #3567AC;">
                                            &nbsp;&nbsp;&nbsp;100% Mexicana
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mx-auto">
                                            <div class="row">
                                                <div class="col-11 px-0" style="border-bottom: 0.5rem solid #3567AC;"></div>
                                                <div class="col-1 px-0">
                                                    <div class="row">
                                                        <div class="col-4 py-3" style="background-color: #3567AC;"></div>
                                                        <div class="col-6"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-3" style="line-height: 1;">
                                            SI LOGISTICA es una empresa 100% mexicana que nace en 2019, especializandose en logística y transporte de carga, siendo un proveedor que se adecua a las necesidades de los clientes para garantizar la satisfacción de los mismos (desde su recolección hasta el destino final) y así tener una efectiva cadena de suministros cumpliendo a detalle en tiempo y forma cada uno de los compromisos adquiridos.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-9 col-12">
                                            <a href="#/" class="btn py-3 fs-5 w-100 btn-azul">VER MÁS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-servicios">
        <div class="container-fluid py-5" style="background-color: #F6F6F6;">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="row">
                                        <div class="col-10 display-4 fw-bolder text-center" style="color: #D0382A;">
                                            Servicios
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10">
                                           <div class="row">
                                                <div class="col-1 px-0">
                                                    <div class="row">
                                                        <div class="col-6"></div>
                                                        <div class="col-6 py-3" style="background-color: #3567AC;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-11 px-0" style="border-bottom: 0.5rem solid #3567AC;"></div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col py-5">
                                    <div class="row">
                                        <div uk-slider>

                                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                        
                                                <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                                                    <div>
                                                        <div class="col px-3 border-end border-danger">
                                                            <div class="row">
                                                                <div class="col-11 mx-auto imagen-servicio" style="
                                                                    background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                                    background-position: center;
                                                                    background-repeat: no-repeat;
                                                                    background-size: cover;
                                                                "></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                                    Entrega puerta a puerta
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-3 text-dark" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col fw-bolder mt-2">
                                                                    <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                Ver más detalles 
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                                <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="col px-3 border-end border-danger">
                                                            <div class="row">
                                                                <div class="col-11 mx-auto imagen-servicio" style="
                                                                    background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                                    background-position: center;
                                                                    background-repeat: no-repeat;
                                                                    background-size: cover;
                                                                "></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                                    Entrega puerta a puerta
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-3 text-dark" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col fw-bolder mt-2">
                                                                    <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                Ver más detalles 
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                                <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="col px-3 border-end border-danger">
                                                            <div class="row">
                                                                <div class="col-11 mx-auto imagen-servicio" style="
                                                                    background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                                    background-position: center;
                                                                    background-repeat: no-repeat;
                                                                    background-size: cover;
                                                                "></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                                    Entrega puerta a puerta
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-3 text-dark" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col fw-bolder mt-2">
                                                                    <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                Ver más detalles 
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                                <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="col px-3 border-end border-danger">
                                                            <div class="row">
                                                                <div class="col-11 mx-auto imagen-servicio" style="
                                                                    background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                                    background-position: center;
                                                                    background-repeat: no-repeat;
                                                                    background-size: cover;
                                                                "></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                                    Entrega puerta a puerta
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-3 text-dark" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col fw-bolder mt-2">
                                                                    <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                Ver más detalles 
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                                <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="col px-3 border-end border-danger">
                                                            <div class="row">
                                                                <div class="col-11 mx-auto imagen-servicio" style="
                                                                    background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                                    background-position: center;
                                                                    background-repeat: no-repeat;
                                                                    background-size: cover;
                                                                "></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                                    Entrega puerta a puerta
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mt-3 text-dark" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col fw-bolder mt-2">
                                                                    <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                Ver más detalles 
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                                <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
                                        
                                            </div>
                                        
                                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                        
                                        </div>

                                        

                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion-contacto">

    </section>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slider_imagenes > div');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');
            const dotContainer = document.querySelector('.dot-container');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.style.display = 'block';
                    } else {
                        slide.style.display = 'none';
                    }
                });
            }

            showSlide(currentSlide);

            function nextSlide() {
                currentSlide++;
                if (currentSlide >= slides.length) {
                    currentSlide = 0;
                }
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide--;
                if (currentSlide < 0) {
                    currentSlide = slides.length - 1;
                }
                showSlide(currentSlide);
            }

            slides.forEach((slide, i) => {
                const dotBtn = document.createElement('img');
                dotBtn.src = "{{ asset('img/photos/home/dot.png') }}";
                dotBtn.alt = "Dot " + (i + 1);
                dotBtn.classList.add('dot-btn');
                dotBtn.classList.add('px-1');
                dotBtn.addEventListener('click', () => {
                    currentSlide = i;
                    showSlide(currentSlide);
                });
                dotContainer.appendChild(dotBtn);
            });

            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
        });
    </script>
    <script>
        $('.slider-logos').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1
        });
    </script>
    
@endsection






{{-- 

                                        <div class="col-lg-3 col-md-4 col-6">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-11 mx-auto imagen-servicio" style="
                                                            background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                            background-position: center;
                                                            background-repeat: no-repeat;
                                                            background-size: cover;
                                                        "></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                            Entrega puerta a puerta
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-3" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col fw-bolder mt-2">
                                                            <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12 col-12">
                                                                        Ver más detalles 
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                        <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-6">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-11 mx-auto imagen-servicio" style="
                                                            background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                            background-position: center;
                                                            background-repeat: no-repeat;
                                                            background-size: cover;
                                                        "></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                            Entrega puerta a puerta
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-3" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col fw-bolder mt-2">
                                                            <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12 col-12">
                                                                        Ver más detalles 
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                        <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-6">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-11 mx-auto imagen-servicio" style="
                                                            background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                            background-position: center;
                                                            background-repeat: no-repeat;
                                                            background-size: cover;
                                                        "></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                            Entrega puerta a puerta
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-3" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col fw-bolder mt-2">
                                                            <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12 col-12">
                                                                        Ver más detalles 
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                        <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-6">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-11 mx-auto imagen-servicio" style="
                                                            background-image: url('{{ asset('img/photos/home/servicios-img.png') }}');
                                                            background-position: center;
                                                            background-repeat: no-repeat;
                                                            background-size: cover;
                                                        "></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-4 fs-1 fw-bolder" style="color: #3567AC; line-height: 1;">
                                                            Entrega puerta a puerta
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-3" style="text-align: justify; line-height: 1; font-size: 0.9rem;">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque odio atque! Quae odio culpa explicabo. Iusto saepe ipsum molestias.
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col fw-bolder mt-2">
                                                            <a href="#/" class="text-decoration-none" style="color: #D0382A;">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12 col-12">
                                                                        Ver más detalles 
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-12 text-start">
                                                                        <img src="{{ asset('img/photos/home/flechita.png') }}" alt="" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>



--}}