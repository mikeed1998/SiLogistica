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
        
    }

    public function contacto() {

    }

    public function servicios() {

    }

    public function servicio($servicio) {

    }

    public function formularioContact() {

    }
}
