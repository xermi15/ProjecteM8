<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;

use App\Document;
use App\Carpeta;

class CU_11Controller extends Controller
{
    public function getPujarVersio($id,$versio){
        $tmp = Document::where('idDocument','=',$id)
                        ->where('versioInterna','=',$versio)
                        ->first();
        if($tmp == null){
            echo "No s'ha trobat un document amb aquest ID o aquesta versió.";
        }
        else{       
            return view("CU_11_PujarVersio",array("document"=>$tmp));
        }
    }
    
    public function postPujarVersio(UploadRequest $request){
        
        $savePath = $request->arxiu->store('documents');
        
        /* Falta cambiar la versió vigent
         */ 
        $novaVersio = new Document();
        
        $novaVersio->nom = $request->nom;
        $novaVersio->idDocument = $request->id;
        $novaVersio->descripcio = $request->desc;
       
        
        $novaVersio->versioInterna = (($request->versioOld) + 1);
        $novaVersio->versioUsuari = $novaVersio->versioInterna;
        $novaVersio->vigent = true;
        
        $novaVersio->path = $savePath;
        
        $novaVersio->save();
        return 'Pujada de versió exitosa';
        //return view("welcome");
    }
}
