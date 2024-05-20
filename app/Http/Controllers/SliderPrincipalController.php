<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\SliderPrincipal;

class SliderPrincipalController extends Controller
{
    public function index() {

    }

    public function store(Request $request) {
        // dd('llegue');
        $slider = new SliderPrincipal;

        $file_slider = $request->file('imagen');

        $extension_slider = $file_slider->getClientOriginalExtension();
        $namefile_slider = Str::random(30) . '.' . $extension_slider;

        \Storage::disk('local')->put("img/photos/sliders/" . $namefile_slider, \File::get($file_slider));

        $slider->imagen = $namefile_slider;

        $slider->save();

        \Toastr::success('Imágen añadida');
        return redirect()->route('seccion.show', ['slug' => 'sliders']);
    }

    public function destroy(SliderPrincipal $slider) {
        $img = 'img/photos/sliders/'.$slider->imagen;
        unlink($img);
        $slider->delete();
        \Toastr::success('Imágen eliminada');
        return redirect()->back();
    }
}
