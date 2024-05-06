<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AJAXController extends Controller
{
    public function textglobalseccion(Request $request){
        if (empty($request->tabla)) {
            return false;
        }

        $nameSpace = '\\App\\';
        $model = $nameSpace . ucfirst($request->tabla);

        $field = $request->campo;
        $val = $request->valor;
       
        if ($model::find($request->id)->update(["$field" => "$val"])) {
            return response()->json(['success'=>true, 'mensaje'=>'Cambio Exitoso']);
        }else {
            return response()->json(['success'=>false, 'mensaje'=>'Error al actualizar']);
        }
    }
}
