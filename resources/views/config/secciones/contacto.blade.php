@extends('layouts.admin')

@section('extraCSS')
    <style>

        body { background-color: #e5e8eb  !important; }

        .card-header { background-color: #b0c1d1  !important; }

        .black-skin
        .btn-primary { background-color: #b0c1d1  !important; }

        .btn {
            box-shadow: none;
            border-radius: 15px;
        }
    </style>

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
                
                height: 460px;
                border-radius: 100%;
                width: 460px;
            }
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .contenedor-imagen {
                height: 540px;
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
    <style>
        .file-upload input[type="file"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .file-upload label {
                    display: inline-block;
                    background-color: #00000031;
                    color: #fff;
                    padding: 6px 12px;
                    cursor: pointer;
                    border-radius: 4px;
                    font-weight: normal;
                    /* opacity: 80%; */
                    }

                    .file-upload input[type="file"] + label:before {
                    content: "\f07b";
                    font-family: "Font Awesome 5 Free";
                    font-size: 16px;
                    margin-right: 5px;
                    transition: all 0.5s;
                    }

                    .file-upload input[type="file"] + label {
                        transition: all 0.5s;
                    }

                    .file-upload input[type="file"]:focus + label,
                    .file-upload input[type="file"] + label:hover {
                    backdrop-filter: blur(5px);
                    background-color: #41464a37;
                    opacity: 100%;
                    transition: all 0.5s;
                    }
    </style>

@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

    <div class="container-fluid">
        <div class="row">   
            <div class="col">
                <div class="row">
                    <div class="col-12 py-5 mx-auto display-2 fw-bolder text-white rounded" style="line-height: 1; background-color:#3567AC;">
                        <div class="row">
                            <div class="col-lg-8 col-11 col-12 ms-auto">
                                Déjanos <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;un Mensaje
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 mx-auto bg-white py-5 contenedor-contacto">
                                <div class="row">
                                    <div class="col pb-5 text-danger text-center">
                                        Los datos de contacto se modifican desde "Configuración", aquí solo podrás cambiar la imagen
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 mx-auto py-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-9 col-12 mx-auto position-relative contenedor-imagen">
                                                <div class="col-12 position-absolute top-0 start-0 imagen-interna" style="
                                                    background-image: url('{{ asset('img/photos/imagenes_estaticas/'.$elem_general[15]->imagen) }}');">
                                                </div>
                                                <div class="col-9 position-absolute top-50 start-50 translate-middle mx-auto">
                                                    <form id="form_img_perfil" action="{{ route('ajax.cambiar_imagen') }}" method="POST" class="file-upload" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id_imagen" value="{{ $elem_general[15]->id }}">
                                                        <input type="hidden" name="tipo_imagen" value="contacto_home">
                                                        <input id="img_perfil" class="m-0 p-0" type="file" name="archivo">
                                                        <label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="img_perfil" style=" height: 100%; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
                                                    </form>
                                                    <script>
                                                        $('#img_perfil').change(function(e) {
                                                            $('#form_img_perfil').trigger('submit');
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-9 col-12 mx-auto ms-auto px-0">
                                                <form action="" class="row">
                                                    <div class="col-12">
                                                        <input type="text" disabled class="form-control formi py-3 w-100 shadow" placeholder="NOMBRE">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" disabled class="form-control formi py-3 mt-4 w-100 shadow" placeholder="EMPRESA">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" disabled class="form-control formi py-3 mt-4 w-100 shadow" placeholder="WHATSAPP">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" disabled class="form-control formi py-3 mt-4 w-100 shadow" placeholder="EMAIL">
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea disabled name="" id="" cols="30" rows="4" class="form-control formi mt-4 shadow" placeholder="MENSAJE"></textarea>
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
                <div class="row bg-white">
                    <div class="col-lg-12 col-11 mx-auto">
                        <div class="row">
                            <div class="col-lg-11 col-12 mx-auto">
                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-lg-4 col-md-10 col-12 mx-auto">
                                        <div class="row">
                                            <div class="col-12 mx-auto py-lg-0 py-2">
                                                <i class="bi bi-envelope-fill"></i> {{ $config->destinatario }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-10 col-12 mx-auto">
                                        <div class="row">
                                            <div class="col-12 mx-auto py-lg-0 py-2">
                                                <i class="bi bi-telephone-fill"></i> TEL. {{ $config->whatsapp }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-9 col-12 mx-auto">
                                        <div class="row">
                                            <div class="col-12 ms-auto text-lg-end text-center py-md-0 py-2">
                                                {{ $config->direccion }}
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

@section('extraJS')

@endsection

