<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Empresa;

class EmpresaController extends Controller
{
    public function index() {

    }

    public function store(Request $request) {
        // dd('llegue');
        $empresa = new Empresa;

        $file_empresa = $request->file('imagen');

        $extension_empresa = $file_empresa->getClientOriginalExtension();
        $namefile_empresa = Str::random(30) . '.' . $extension_empresa;

        \Storage::disk('local')->put("img/photos/empresas/" . $namefile_empresa, \File::get($file_empresa));

        $empresa->imagen = $namefile_empresa;

        $empresa->save();

        \Toastr::success('Imágen añadida');
        return redirect()->route('seccion.show', ['slug' => 'empresas']);
    }

    public function destroy(Empresa $empresa) {
        $img = 'img/photos/empresas/'.$empresa->imagen;
        unlink($img);
        $empresa->delete();
        \Toastr::success('Imágen eliminada');
        return redirect()->back();
    }
}
