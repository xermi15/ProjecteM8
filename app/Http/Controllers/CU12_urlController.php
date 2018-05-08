<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\URL_Document;
use App\Document;

class CU12_urlController extends Controller
{
    public function generaURL(Request $request, $id, $idVer) {
        
        $resultat = Document::where('idDocument', '=', $id)->where('versioInterna', '=', $idVer)->first();
        
        $doc = new URL_Document;
        
        if(count($resultat)==1){
            
            $user = URL_Document::where('idDocument', '=', $id)
                                ->where ('versioInterna', '=', $idVer)
                                ->get();
            
            if($user==null){
                
                $doc->idDocument=$id;
                $doc->versioInterna=$idVer;
                $doc->url="http://localhost/DAW2M14/public/CU12_URL_Descarrega/".$id."/".$idVer;
                $doc->actiu=true;
                $doc->save();
            }
        }
         return redirect('abrirCarpeta/'.$resultat->idCarpeta);
        
    }
    
    public function descarregarURL($id, $idVer) {
      
      $resultat = Document::where('idDocument', '=', $id)->where('versioInterna', '=', $idVer)->first();
               
      $pathtoFile = public_path()."CU12_URL_Descarrega/".$id."/".$idVer;//ruta al fitxer 
      response()->download($pathtoFile);
      
      return redirect('abrirCarpeta/'.$resultat->idCarpeta);
    }
    
}
