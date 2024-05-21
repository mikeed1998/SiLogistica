@extends('layouts.app')

@section('title', 'Contacto')

@section('extracss')

    <style>
        
        body {
            background-color: #3567AC;
        }

        .contenedor-contacto {
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .form-control::placeholder {
            color: #D0382A;
        }

        .form-control {
            padding-left: 1.75rem; 
        }

        @media(min-width: 992px) {
            .contenedor-imagen {
                
            }

            .imagen-interna {
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                margin-left: -20rem; 
                margin-top: -12rem; 
                height: 800px;
                border-radius: 100%;
                width: 800px;
            }
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .contenedor-imagen {
                height: 500px;
            }

            .imagen-interna {
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 30rem;
                border-radius: 100%;
                width: 30rem;
            }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .contenedor-imagen {
                height: 400px;
            }

            .imagen-interna {
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 20rem;
                border-radius: 100%;
                width: 20rem;
            }
        }

    </style>
    
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">   
            <div class="col">
                <div class="row">
                    <div class="col-11 mx-auto py-0 display-2 fw-bolder text-white" style="line-height: 1;">
                        <div class="row">
                            <div class="col-lg-8 col-11 col-12 ms-auto">
                                Déjanos <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;un Mensaje
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row mt-3">
                    <div class="col pt-5">
                        <div class="row">
                            <div class="col-11 mx-auto bg-white py-5 contenedor-contacto">
                                <div class="row">
                                    <div class="col-11 mx-auto py-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-9 col-12 mx-auto border position-relative contenedor-imagen">
                                                <div class="col-12 border border-danger position-absolute top-0 start-0 imagen-interna" style="
                                                    background-image: url('{{ asset('img/photos/contacto/contacto.png') }}');">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-12 mx-auto ms-auto px-0">
                                                <form action="" class="row">
                                                    <div class="col-12">
                                                        <input type="text" class="form-control formi py-3 w-100 shadow" placeholder="NOMBRE">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control formi py-3 mt-4 w-100 shadow" placeholder="EMPRESA">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control formi py-3 mt-4 w-100 shadow" placeholder="WHATSAPP">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control formi py-3 mt-4 w-100 shadow" placeholder="EMAIL">
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea name="" id="" cols="30" rows="4" class="form-control formi mt-4 shadow" placeholder="MENSAJE"></textarea>
                                                    </div>
                                                </form>
                                                <div class="row">
                                                    <div class="col-md-6 col-12 ms-auto px-0">
                                                        <div class="row mt-4">
                                                            <div class="col-6 mx-auto text-end">
                                                                <a href="#/" class="text-decoration-none px-1">
                                                                    <i class="bi bi-whatsapp text-dark fs-4"></i>
                                                                </a>
                                                                <a href="#/" class="text-decoration-none px-1">
                                                                    <i class="bi bi-facebook text-dark fs-4"></i>
                                                                </a>
                                                                <a href="#/" class="text-decoration-none px-1">
                                                                    <i class="bi bi-instagram text-dark fs-4"></i>
                                                                </a>
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
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="row">
            <div class="col py-5 bg-white">
                
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    
@endsection