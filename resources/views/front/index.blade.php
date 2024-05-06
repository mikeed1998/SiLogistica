@extends('layouts.app')

@section('title', 'Home')

@section('extracss')
    
@endsection

@section('content')
    <div class="container-fluid" style="background-color: #3567AC;">
        <div class="row">
            <div class="col-2 d-flex align-items-center justify-content-center text-center bg-dark" style="height: 10rem;">
                <img src="{{ asset('img/photos/logo.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <div class="row" style="border-bottom: 2px solid;">
                    <div class="col-3 border py-3">

                    </div>
                    <div class="col-9 border py-3">
                        <div class="row">
                            <div class="col-11 mx-auto border">
                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-3 text-white">
                                        <i class="bi bi-whatsapp fs-4"></i>
                                        <i class="bi bi-facebook fs-4"></i>
                                        <i class="bi bi-instagram fs-4"></i>
                                    </div>
                                    <div class="col-3 fs-5 text-white">
                                        Iniciar sesión
                                    </div>
                                    <div class="col-3">
                                        <button class="btn btn-outline border-white fs-5 text-white">Rastrear Guía</button>
                                    </div>
                                    <div class="col-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection


