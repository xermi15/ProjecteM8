<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;

use App\Document;
use App\Carpeta;

class CU_11Controller extends Controller
{
    public function getPujarVersio($id){
        $tmp = Document::where('idDocument','=',$id)
                        ->where('vigent','=',true)
                        ->first();
        if($tmp == null){
            echo "No s'ha trobat un document amb aquest ID o aquesta versió.";
        }
        else{       
            return view("CU_11_PujarVersio",array("document"=>$tmp));
        }
    }
    
    public function postPujarVersio($id,UploadRequest $request){
        
        $savePath = $request->arxiu->store('documents');
        
        $ultimaVersio = Document::where('idDocument','=',$request->id)
                                        ->orderBy('versioInterna','desc');
        
        foreach ($ultimaVersio as $doc) {
            $doc->vigent = false;
            $doc->save();
        }
        
        $ultimaVersio = $ultimaVersio->first()->versioInterna;
        
        $novaVersio = new Document();
        
        $novaVersio->nom = $request->nom;
        $novaVersio->idDocument = $request->id;
        $novaVersio->descripcio = $request->desc;
       
        
        $novaVersio->versioInterna = (($ultimaVersio) + 1);
        
        if(isset($request->ver)){
            
            $novaVersio->versioUsuari = $request->ver;
        }
        else{
            $novaVersio->versioUsuari = $novaVersio->versioInterna;
        }
        
        $novaVersio->vigent = true;
        
        $novaVersio->path = $savePath;
        
        $novaVersio->save();
        
        $carpeta = 1; //Valor per defecte
        if(isset($_SESSION['carpetaActual'])){
            $carpeta = $_SESSION['carpetaActual'];
        }
        return redirect('abrirCarpeta/'.$carpeta);
        //return view("welcome");
    }
}
