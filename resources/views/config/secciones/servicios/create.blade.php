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
        <a href="{{ route('seccion.show', ['slug' => 'servicios']) }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

    {{-- <div id="summernote">Hello Summernote</div> --}}

    <div class="container-fluid bg-white py-5">
        <div class="row">
            <div class="col display-5 text-center fw-bolder">
                Crear nuevo servicio   
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-9 mx-auto">
                <form action="{{ route('servicio.servicio.store') }}" method="POST" enctype="multipart/form-data" class="row">
                    @csrf
                    <div class="col-12 py-2">
                        <label for="servicio_titulo" class="form-control-label fs-5">Nombre del servicio</label>
                        <input type="text" id="servicio_titulo" name="servicio_titulo" class="form-control shadow-none" placeholder="Nombre del servicio" required>
                    </div>
                    <div class="col-12 py-2">
                        <label for="servicio_descripcion" class="form-control-label fs-5">Descripción del servicio</label>
                        <textarea id="summernote" name="servicio_descripcion" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="col-12 py-2">
                        <label for="servicio_portada" class="form-control-label fs-5">Portada del servicio</label>
                        <input type="file" id="servicio_portada" name="servicio_portada" class="form-control shadow-none" placeholder="Portad del servicio" accept="image/png, image/gif, image/jpeg" required>
                    </div>
                    <div class="col-12 py-2">
                        <input type="submit" class="btn btn-dark w-100 rounded-0" value="Guardar nuevo servicio">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('extraJS')
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection

