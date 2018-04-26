<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\URL_Document;
use App\Document;

class CU12_urlController extends Controller
{
    public function generaURL(Request $request, $id, $idVer) {
        
        $resultat = Document::where('idDocument', '=', $id)->where('versioInterna', '=', $idVer)->get();
        
        if(count($resultat)==1){
            
        $doc = new URL_Document;
        $doc->idDocument=$id;
        $doc->versioInterna=$idVer;
        $doc->url=$request->nombreURL;
        $doc->actiu=true;
        $doc->save();

        }
         return redirect('abrirCarpeta/'.$resultat->idCarpeta);
        
    }
}
