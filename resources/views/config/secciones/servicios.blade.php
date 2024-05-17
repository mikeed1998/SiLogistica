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
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ asset('img/photos/servicios/'.$serv->portada) }}" alt="" class="img-fluid" style="object-fit: contain;">
                            </div>
                            <div class="col-8">
                                <div class="row d-flex align-items-center justify-content-center h-100">
                                    <div class="col-8 d-flex align-items-center justify-content-center h-100">
                                        <div class="card-title">{{ $serv->titulo }}</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check form-switch">
                                            <label for="switch_inicio-{{$serv->id}}" class="form-control-label fw-bolder py-2">Mostrar en inicio</label>
                                            <input class="form-check-input switch-color-inicio shadow-none fs-2" role="switch" id="switch_inicio-{{$serv->id}}" data-id="{{$serv->id}}" data-campo="inicio" type="checkbox" @if($serv->inicio == 1) checked @endif>
                                        </div>
                                        <script>
                                            $('#switch_inicio-'+{{$serv->id}}).change(function (e){
                                                var checkbox = $(this);
                                                console.log('switch-'+{{$serv->id}});
                                                var check = 0;
                                                if (checkbox.prop('checked')) {
                                                    check = 1;
                                                } else {
                                                    check = 2;
                                                }
                                                console.log(check);
                                                var id = checkbox.attr("data-id");
                                                var tcsrf = $('meta[name="csrf-token"]').attr('content');
                                                var valor = check;
                                                var URL = "{{ route('ajax.switch_inicio') }}";
                                                console.log("valor: " + valor);
                                                $.ajax({
                                                    url: URL,
                                                    type: 'post',
                                                    dataType: 'json',
                                                    data: {
                                                        "_method": 'post',
                                                        "_token": tcsrf,
                                                        "id": id,
                                                        "valor": valor
                                                    }
                                                })
                                                .done(function(msg) {
                                                    console.log(msg);
                                                    if (msg.success) {
                                                        toastr["info"](msg.mensaje);
                                                        if (msg.mensaje.valor == 1) {
                                                            checkbox.prop('checked', true);
                                                        } else if (msg.mensaje.valor == 2) {
                                                            checkbox.prop('checked', false);
                                                        }
                                                    } else {
                                                        toastr["error"](msg.mensaje);
                                                    }
                                                })
                                                .fail(function(msg) {
                                                    toastr["error"]('Error al agregar el serv al inicio');
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-dark w-100 rounded-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $serv->id }}"><i class="bi bi-eye"></i> Detalle</button>
                                        <div class="modal fade" id="staticBackdrop-{{ $serv->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-{{ $serv->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel-{{ $serv->id }}">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! $serv->descripcion !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Understood</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-info w-100 rounded-0"><i class="bi bi-book"></i> Editar</button>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-danger w-100 rounded-0"><i class="bi bi-trash"></i> Eliminar</button>
                                    </div>
                                </div>
                                {{-- <div class="card-body">{!! $serv->descripcion !!}</div> --}}
                            </div>
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

