@extends('layouts.app')

@section('title', 'Home')

@section('extracss')
    <style>
        body {
            background-color: #3567AC; 
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
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .principal-slider {
                height: 20rem;
            }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .principal-slider {
                height: 10rem;
            }
        }

        .dot-btn {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <section class="slider-principal">
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
        <div class="container-fluid bg-white">
            <div class="row text-center py-5">
                <div class="slider-logos">
                    <div class="col mx-auto">
                        <img src="{{ asset('img/photos/home/DHL.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col mx-auto">
                        <img src="{{ asset('img/photos/home/FEDEX.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col mx-auto">
                        <img src="{{ asset('img/photos/home/REDPACK.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="seccion-nosotros">

    </section>

    <section class="slider-servicios">

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
