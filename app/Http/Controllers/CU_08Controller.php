<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Document;

class CU_08Controller extends Controller
{
    public function getPujarDoc(){
        return view('CU_08_PujarDoc');
    }
    
    public function postPujarDoc(UploadRequest $request, $idCarpeta){        
        //Storage::disk('local')->put($request->input('arxiu'), $request->input('arxiu'));
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $savePath = $request->arxiu->store('documents');
       
        $nouDoc = new Document;
        
        $nouDoc->nom = $request->nom;
        $nouDoc->descripcio = $request->desc;
        $nouDoc->versioInterna = 1;
        $nouDoc->versioUsuari = 1.0;
        $nouDoc->vigent = true;
        
        $nouDoc->path = $savePath;
        
        //$tmp = str_split($request->input('arxiu'));
        
        
        if(isset($_SESSION['idUsuari'])){
            $nouDoc->idusuariCreacio = $_SESSION['idUsuari'];
        }
        
        $nouDoc->idCarpeta = $idCarpeta;
        
        $nouDoc->save();
        
        return redirect('abrirCarpeta/'.$idCarpeta);
        
        //$nouDoc->
        //return redirect()('/CU_07');
    }
}
