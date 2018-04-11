<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\Document;
use Notification;

class CU_09Controller extends Controller {

    public function moverDocumento(Request $request, $id) {
        
        $documento = Document::find($id);
        $carpeta = Carpeta::find($documento->idCarpeta);
        $carpetaPadre = Carpeta::where('nom', $request->nombreMovCarpeta)->first();

        $permiso=app('App\Http\Controllers\ComprovarPermisos')->comprovarPermis($carpeta->idCarpeta);
        $permisoMover=app('App\Http\Controllers\ComprovarPermisos')->comprovarPermis($carpetaPadre->idCarpeta);
        
        if(($permiso=='w')||($permiso=='s') && ($permisoMover=='w')||($permisoMover=='s')){
            $documento->idCarpeta = $carpetaPadre->idCarpeta;
            $documento->save();
        }else{
            Notification::error("No tens permisos per realitzar aquesta acció.");
        }
        return redirect('abrirCarpeta/'.$carpetaPadre->idCarpeta);
    }

}
