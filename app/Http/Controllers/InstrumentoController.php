<?php

namespace App\Http\Controllers;

use App\Models\estacion_instrumento;
use App\Models\Variable;
use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public function consultar_instrumento($id){
        $instrumento = estacion_instrumento::with('instrumento.Parametros.Unidad_De_Medida')->find($id);
        $variable=Variable::find($instrumento->instrumento->variable_id);
        // echo $variable;
        return view('instrumento', compact('instrumento','variable'));
    }
}
