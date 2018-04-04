<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;
use App\Document;

class CU_08Controller extends Controller
{
    public function getPujarDoc(){
        return view('CU_08_PujarDoc');
    }
    
    public function postPujarDoc(UploadRequest $request){        
        //Storage::disk('local')->put($request->input('arxiu'), $request->input('arxiu'));
        
        $savePath = $request->arxiu->store('documents');
       
        $nouDoc = new Document;
        
        $nouDoc->nom = $request->nom;
        $nouDoc->descripcio = $request->desc;
        $nouDoc->versioInterna = 1;
        $nouDoc->versioUsuari = 1.0;
        $nouDoc->vigent = true;
        
        $nouDoc->path = $savePath;
        
        //$tmp = str_split($request->input('arxiu'));
        
        $tmp = $_SESSION['idUsuari'];
        if(isset($tmp)){
            $nouDoc->idusuariCreacio = $tmp;
        }
        $tmp = $_SESSION['carpetaActual'];
        if(isset($tmp)){
            $nouDoc->idCarpeta = $tmp;
        }
            
        
        $nouDoc->save();
        
        return redirect('abrirCarpeta/'.tmp);
        
        //$nouDoc->
        //return redirect()('/CU_07');
    }
}
