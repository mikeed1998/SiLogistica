<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Seccion;
use App\Elemento;
use App\Faq;
use App\Politica;
use App\Empresa;
use App\SliderPrincipal;
use App\Servicio;

class SeccionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $seccion = Seccion::all();
        return view('config.secciones.index', compact('seccion'));
    }

    public function show($seccion) {
        $config = Configuracion::first();
		$seccion = Seccion::where('slug',$seccion)->first();
        $elements = Elemento::where('seccion',$seccion->id)->get()->toBase();
        $elem_general = Elemento::all();
        $faqs = Faq::all();
        $sliders = SliderPrincipal::all();
        $empresas = Empresa::all();
        $politicas = Politica::all();
        $servicios = Servicio::all();

        if($seccion->seccion == 'configuracion') { 
            $ruta = 'config.general.contacto';
        } else if($seccion->seccion == 'politicas') {
            $ruta = 'config.politicas.index';
        } else if($seccion->seccion == 'faqs') {    
            $ruta = 'config.faqs.index';
        } else {
            $ruta = 'config.secciones.'.$seccion->seccion;
        }

        return view($ruta, compact('seccion', 'config', 'elem_general', 'faqs', 'politicas', 'elements', 'servicios', 'sliders', 'empresas'));
    }

    public function textglobalseccion(Request $request){
        if (empty($request->tabla)) {
            return false;
        }

        $nameSpace = '\\App\\';
        $model = $nameSpace . ucfirst($request->tabla);

        $field = $request->campo;
        $val = $request->valor;
        // $model = $model::find($request->id);
        // $model->$field = $request->valor;
        // $model->save();

        // $model::find($request->id)->update(["$field" => "$val"]);
        if ($model::find($request->id)->update(["$field" => "$val"])) {
            return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);
        }else {
            // code...
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
        }
        // return $request->valor;
    }

}
