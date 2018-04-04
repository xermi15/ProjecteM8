<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use Notification;

class CU_18Controller extends Controller {

    public function modificarCarpeta(Request $request, $id) {
        $carpeta = Carpeta::find($id);
        $permiso=app('App\Http\Controllers\ComprovarPermisos')->comprovarPermis($id);
        if (($permiso=='w')||($permiso=='s')){
            $carpeta->nom = $request->nombreInput;
            $carpeta->descripcio = $request->descripcioInput;
            $carpeta->dataModificacio = date('Y-m-d');
            $carpeta->save();
            return redirect('abrirCarpeta/'.$carpeta->idCarpetaPare);
        }else{
            Notification::error("No tens permisos per realitzar aquesta acció.");
            return redirect('abrirCarpeta/'.$carpeta->idCarpetaPare);
        }
    }
    
    public function gestionarPermisos(Request $request, $id){
        
    }
    
    public function devuelveGrupos(Request $request, $id){
        
    }
    
    public function devuelveUsuarios(Request $request, $id){
        $carpetes = Carpeta::where('idCarpetaPare', '=', $id)->get();
        $arxius = Document::where('idCarpeta', '=', $id)->get();
        //$totesCarpetes = Carpeta::all();
        $carpetesAll = Carpeta::all();
        
        $totesCarpetes = "<ul>";
        
        foreach($carpetesAll as $key => $carpeta){
            $totesCarpetes .= "<li>".$carpeta->nom."</li>";
        }
        $totesCarpetes .= "</ul>";

        
        return view('CU07_OpenFolder', compact('carpetes','arxius','totesCarpetes'))->withTitle($id);
    }

}
