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
@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col display-5 text-center fw-bolder">
                Servicios   
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 mx-auto">
                <a href="{{ route('servicio.servicio.create') }}" class="btn btn-dark w-100">Crear nuevo</a>
            </div>
        </div>
        <div class="row mt-5">
            @forelse ($servicios as $serv)
                <div class="col-12">
                    <div class="card">
                        <img src="{{ asset('img/photos/servicios/'.$serv->portada) }}" alt="" class="img-fluid">
                        <div class="card-body">
                            <div class="card-title">{{ $serv->titulo }}</div>
                            <div class="card-body">{{ $serv->descripcion }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    No hay servicios
                </div>
            @endforelse
        </div>
    </div>

@endsection

@section('extraJS')

@endsection

