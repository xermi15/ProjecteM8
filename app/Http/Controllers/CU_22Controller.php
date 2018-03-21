<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;

class CU_22Controller extends Controller {

    public function modificarCarpeta(Request $request, $id) {
        $carpeta = Carpeta::find($id);
        $carpeta->nom = $request->nombreInput;
        $carpeta->descripcio = $request->descripcioInput;
        $carpeta->dataModificacio = date('Y-m-d');
        $carpeta->save();        
        
        return redirect('abrirCarpeta/'.$carpeta->idCarpetaPare);
    }

}
