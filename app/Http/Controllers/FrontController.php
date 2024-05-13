<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.index');
    }

    public function admin() {
        return view('front.admin');
    }

    public function nosotros() {
        return view('front.nosotros');
    }

    public function contacto() {
        return view('front.contacto');
    }

    public function servicios() {
        return view('front.servicios');
    }

    public function servicio($servicio) {
        $servicio = 0;
        return view('front.servicio', compact('servicio'));
    }

    public function formularioContact() {

    }
}
