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

    <div class="container-fluid bg-white py-5 rounded mb-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column text-center">
                <h3 class="fs-1 fw-bolder" style="color:black; font-family: Arial, sans-serif;">Añadir imagen al slider</h3>
                <form id="form_image_slider" action="{{ route('slider.slider.store') }}" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                    @csrf
                    <input id="input_slider_img" class="m-0 p-0" type="file" name="imagen">
                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_img" style="opacity: 100%; !important; border-radius: 26px; background-color: #000000;">Seleccionar archivo</label>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            @forelse ($sliders as $slider)
                <div class="col-3 mt-4 position-relative">
                    <div class="card border-0">
                        <div style="
                            background-image: url('{{ asset('img/photos/sliders/'.$slider->imagen) }}');
                            background-color: #000000;
                            background-size: contain;
                            background-position: center;
                            background-repeat: no-repeat;
                            width: 100%;
                            height: 16rem;
                            border-radius: 32px;
                        "></div>
                    </div>
                    <div class="col position-absolute top-0 end-0">
                        <form action="{{ route('slider.slider.destroy', ['slider' => $slider->id]) }}" method="POST" enctype="multipart/form-data" id="form-{{ $slider->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger rounded-circle"><i class="bi bi-x fs-4"></i></button>
                        </form>
                    </div>
                </div>  
            @empty
                <div class="card w-100 text-center py-3">No hay imágenes en el slider</div>
            @endforelse
        </div>
    </div>

@endsection

@section('extraJS')
    <script>
        $('#input_slider_img').change(function(e) {
            $('#form_image_slider').trigger('submit');
        });
    </script>
@endsection

