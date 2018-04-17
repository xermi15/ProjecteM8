<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;

class CU_37Controller extends Controller {

    public function getCU_37($id){
        $grup = Grup::findOrFail($id);
        return view('CU_37_EliminarGrupo', compact('grup'));
    }
    public function eliminarGrup($id) {

        $grup = Grup::findOrFail($id);
        $grup->delete();
        Notification::success("El grup s'ha eliminat correctament.");

    }

}
