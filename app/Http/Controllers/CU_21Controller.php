<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use Notification;

class CU_21Controller extends Controller {

    public function moverCarpeta(Request $request, $id) {
        
        $carpeta = Carpeta::find($id);
        $carpetaPadre = Carpeta::where('nom', $request->nombreMovCarpeta)->first();

        $permiso=app('App\Http\Controllers\ComprovarPermisos')->comprovarPermis($id);
        $permisoMover=app('App\Http\Controllers\ComprovarPermisos')->comprovarPermis($carpetaPadre->idCarpeta);
        
        if(($permiso=='w')||($permiso=='s') && ($permisoMover=='w')||($permisoMover=='s')){
            $carpeta->idCarpetaPare = $carpetaPadre->idCarpeta;
            $carpeta->save();
        }else{
            Notification::error("No tens permisos per realitzar aquesta acció.");
        }
        return back();
    }

}
