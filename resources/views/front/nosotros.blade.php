@extends('layouts.app')

@section('title', 'Nosotros')

@section('extracss')
    <style>
        
        body {
            background-color: #3567AC; 
        }

    </style>
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-6" style="background-color: #3567AC;">
                            <div class="row">
                                <div class="col-10 text-white py-5 mx-auto display-2 fw-bolder text-end border">
                                    Empresa 100% Mexicana
                                </div>
                            </div>
                            <div class="row">
                                <div class="col border bg-white h-100">
                                    <div class="row">
                                        <div class="col-10 mx-auto">
                                            <div class="row">
                                                <div class="col-9 ms-auto py-5" style="line-height: 1; hyphens: auto; text-align: right; font-size: 0.9rem;">
                                                    SI LOGISTICA es una empresa 100% mexcicana que nace en 2019, especializandose en logística y transporte de carga, siendo un proveedor que se adecua a las necesidades de los clientes para garantizar la satisfacción de los mismos (desde su recolección hasta el destino final) y asi tener una efectiva cadena de suministros cumpliendo a detalle en tiempo y forma cada uno de los compromisos adquiridos.
                                                    <br><br>
                                                    Nuestra experiencia nos ha permitido trabajar con empresas líderes en el mercado en México y en el extranjero. El origen de nuestra motivación está en ofrecer a nuestros clientes soluciones a medida en servicios con caja seca, transportando componentes electrónicos, materia prima, producto terminado, alimnetos veterinarios, consumibles de industria farmacéutica, suplementos alimenticios, equipo médico, refacciones automovilísticas, cargas de alto valor (bolsas, calzado) entre otros. Asi como entregas especificas para el sector gobierno.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 border" style="
                            border-top-left-radius: 2rem; 
                            border-bottom-left-radius: 2rem;
                            background-image: url('{{ asset('img/photos/nosotros/nosotros.png') }}');
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                            height: 50rem;
                        "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    
@endsection