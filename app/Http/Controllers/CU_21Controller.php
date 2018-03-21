<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;

class CU_21Controller extends Controller {

    public function moverCarpeta(Request $request, $id) {
        
        //Se debería poner que el nombre de la carpeta sea único.
        $carpeta = Carpeta::find($id);
        $carpetaPadre = Carpeta::where('nom', $request->nombreMovCarpeta)->first();        
        $carpeta->idCarpetaPare = $carpetaPadre->idCarpeta;
        $carpeta->save();
        
        return redirect('abrirCarpeta/'.$carpetaPadre->idCarpeta);
    }

}
