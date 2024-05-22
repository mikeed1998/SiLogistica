<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Seccion;
use App\Elemento;
use App\Politica;
use App\Servicio;
use App\SliderPrincipal;
use App\Faq;
use App\Empresa;

class FrontController extends Controller
{
    public function index() {
        $config = Configuracion::first();
        $elements = Elemento::all();
        $slider_principal = SliderPrincipal::all();
        $empresas = Empresa::all();
        $servicios = Servicio::where('inicio', 1)->get()->toBase();

        return view('front.index', compact('config', 'elements', 'slider_principal', 'empresas', 'servicios'));
    }

    public function admin() {
        return view('front.admin');
    }

    public function nosotros() {
        $config = Configuracion::first();
        $elements = Elemento::all();
        $servicios = Servicio::all();
        $empresas = Empresa::all();

        return view('front.nosotros', compact('config', 'servicios', 'elements', 'empresas'));
    }

    public function contacto() {
        $config = Configuracion::first();
        $elements = Elemento::all();
        $servicios = Servicio::all();

        return view('front.contacto', compact('config', 'servicios', 'elements'));
    }

    public function servicios() {
        return view('front.servicios');
    }

    public function servicio($id) {
        $config = Configuracion::first();
        $servicio = Servicio::find($id);
        $servicios = Servicio::all();
        $empresas = Empresa::all();
        
        return view('front.servicio', compact('config', 'servicio', 'servicios', 'empresas'));
    }

    public function formularioContact() {

    }
}



