<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ServicioController extends Controller
{
    public function index() {

    }

    public function create() {
        return view('config.secciones.servicios.create');
    }

    public function store(Request $request) {

        dd($request);

        $servicio = new Servicio;

        $file_servicio = $request->file('archivo');

        $extension_servicio = $file_servicio->getClientOriginalExtension();
        $namefile_servicio = Str::random(30) . '.' . $extension_servicio;

        \Storage::disk('local')->put("img/servicios/" . $namefile_servicio, \File::get($file_servicio));

        $servicio->portada = $namefile_servicio;

        $servicio->save();

        \Toastr::success('Categoría añadida');
        return redirect()->back();
    }

    public function edit(Servicio $servicios) {
        return view('config.secciones.servicios.edit', compact('servicios'));
    }

    public function update(Request $request, Servicio $servicios) {

    }

    public function destroy(Servicio $servicios) {
        
    }
}
