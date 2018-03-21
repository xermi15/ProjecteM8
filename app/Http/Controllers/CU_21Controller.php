<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;

class CU_21Controller extends Controller {

    public function moverCarpeta(Request $request, $id) {
        dd($request->nombreMovCarpeta);
        $carpeta = Carpeta::find($id);
        $idCarpeta = $carpeta->idCarpetaPare;
        $carpeta->delete();
        
        
        return redirect('abrirCarpeta/'.$idCarpeta);
    }

}
