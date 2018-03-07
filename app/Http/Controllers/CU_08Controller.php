<?php

use App\Document;
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
        /*
        echo "Aquí es pujaria el document a la base de dades.";
        echo "<br>";
        echo "El nom del fitxer es: ".$request->input('nom');
        */
        
        //Storage::disk('local')->put($request->input('arxiu'), $request->input('arxiu'));
        
        $savePath = $request->input('arxiu')->store('documents');
        
        $nouDoc = new Document;
        
        $nouDoc->descripcio = $request->input('desc');
        $nouDoc->versioInterna = 1;
        $nouDoc->versioUsuari = 1.0;
        $nouDoc->vigent = true;
        $nouDoc->nom = $request->input('nom');
        $nouDoc->path = $savePath;
        
        $tmp = str_split($request->input('arxiu'));
    
        $tmp = $_SESSION['carpetaActual'];
        if(isset($tmp)){
            $nouDoc->idCarpeta = $_SESSION['carpetaActual'];
        }
        $tmp = $_SESSION['idUsuari'];
        if(isset($tmp)){
            $nouDoc->idusuariCreacio();
        }
        
        $nouDoc->save();
       
        
        
        return 'Upload successful!';
        
        //$nouDoc->
        //return redirect()('/CU_07');
    }
}
