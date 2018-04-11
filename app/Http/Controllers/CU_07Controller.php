<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\Document;

class CU_07Controller extends Controller {

    public function abrirCarpeta($id) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        if($id == "personal"){
            $personal = Carpeta::where('nom', $_SESSION['nomUsuari'])->first();
            if($personal==null){
                $carpeta = new Carpeta;
                $carpeta->nom = $_SESSION['nomUsuari'];
                $carpeta->descripcio = "Personal".$_SESSION['nomUsuari'];
                $carpeta->dataCreacio = date('Y-m-d');
                $carpeta->dataModificacio = date('Y-m-d');
                $carpeta->path = "privadas/".$_SESSION['nomUsuari'];
                $carpeta->save();
            }else{
                $id=$personal->idCarpeta;   
            }

        }
        
        $carpetes = Carpeta::where('idCarpetaPare', '=', $id)->get();
        $arxius = Document::where('idCarpeta', '=', $id)->get();
        $totesCarpetes = $this->arbolCarpetas();

        return view('CU07_OpenFolder', compact('carpetes','arxius','totesCarpetes'))->withTitle($id);
    }
    
    public static function arbolCarpetas(){
        
        $carpetaPareList = Carpeta::whereNull('idCarpetaPare')->get();
        $carpetaPare = $carpetaPareList[0];
        
        $resultado = "<b>".$carpetaPare->nom."</b>";
        $resultado .= CU_07Controller::misHijos($carpetaPare->idCarpeta);
        
        return $resultado;
    }
    
    public static function misHijos($idPare){
        
        $carpetes = Carpeta::where('idCarpetaPare', '=', $idPare)->get();
        $arxius = Document::where('idCarpeta', '=', $idPare)->get();
        
        $resultado = "<ul>";
        foreach($carpetes as $key => $carpeta){
                $resultado .= "<li><span style='margin-right:5px;' class='glyphicon glyphicon-folder-open'></span>".$carpeta->nom."</li>";
                foreach($arxius as $key => $arxiu){
                    $resultado .= "<li><span style='margin-right:5px;' class='glyphicon glyphicon-file'></span>".$arxiu->nom."</li>";
                }
                $resultado .= CU_07Controller::misHijos($carpeta->idCarpeta);
        }
        $resultado .= "</ul>";
        
        return $resultado;
    }
}
