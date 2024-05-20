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

        $servicio = new Servicio;

        $file_servicio = $request->file('servicio_portada');

        $extension_servicio = $file_servicio->getClientOriginalExtension();
        $namefile_servicio = Str::random(30) . '.' . $extension_servicio;

        \Storage::disk('local')->put("img/photos/servicios/" . $namefile_servicio, \File::get($file_servicio));

        $servicio->titulo = $request->servicio_titulo;
        $servicio->descripcion = $request->servicio_descripcion;
        $servicio->portada = $namefile_servicio;

        $servicio->save();

        \Toastr::success('Servicio añadido');
        return redirect()->route('seccion.show', ['slug' => 'servicios']);
    }

    public function edit(Servicio $servicio) {
        return view('config.secciones.servicios.edit', compact('servicio'));
    }

    public function update(Request $request, Servicio $servicio) {
        $oldImage = $servicio->portada;
    
        if ($request->hasFile('servicio_portada')) {
            $file_servicio = $request->file('servicio_portada');
            
            $extension_servicio = $file_servicio->getClientOriginalExtension();
            $namefile_servicio = Str::random(30) . '.' . $extension_servicio;
    
            \Storage::disk('local')->put("img/photos/servicios/" . $namefile_servicio, \File::get($file_servicio));
    
            if (\Storage::disk('local')->exists("img/photos/servicios/" . $oldImage)) {
                \Storage::disk('local')->delete("img/photos/servicios/" . $oldImage);
            }
    
            $servicio->portada = $namefile_servicio;
        }
    
        $servicio->titulo = $request->servicio_titulo;
        $servicio->descripcion = $request->servicio_descripcion;
    
        $servicio->save();
    
        \Toastr::success('Servicio actualizado');
        return redirect()->route('seccion.show', ['slug' => 'servicios']);
    }
    
    public function destroy(Servicio $servicio) {
        $img = 'img/photos/servicios/'.$servicio->portada;
        unlink($img);
        $servicio->delete();
        return redirect()->back();
    }
    
}
