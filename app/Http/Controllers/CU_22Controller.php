<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use Notification;

class CU_22Controller extends Controller {

    public function modificarCarpeta(Request $request, $id) {
        $carpeta = Carpeta::find($id);
        $permiso=app('App\Http\Controllers\ComprovarPermisos')->comprovarPermis($id);
        if (($permiso=='w')||($permiso=='s')){
            $carpeta->nom = $request->nombreInput;
            $carpeta->descripcio = $request->descripcioInput;
            $carpeta->dataModificacio = date('Y-m-d');
            $carpeta->save();
        }else{
            Notification::error("No tens permisos per realitzar aquesta acció.");
        }
        return redirect('abrirCarpeta/'.$carpeta->idCarpetaPare);
    }

}
