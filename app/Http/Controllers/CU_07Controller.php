<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\Document;

class CU_07Controller extends Controller {

    public function abrirCarpeta($id) {
        
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
