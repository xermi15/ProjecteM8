<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\URL_Document;
use App\Document;

class CU12_urlController extends Controller
{
    public function generaURL(Request $request) {
        
        $resultat = Document::where('idDocument', '=', $request->input('idDocument'))->where('versioInterna', '=', $request->input('versioInterna'))->get();
        
        if(count($resultat)==1){
            
        $doc = new URL_Document;
        $doc->idDocument=$request->idDocument;
        $doc->versioInterna=$request->versioInterna;
        $doc->url="localhost/DAW2M14/public/document?id=".$request->idDocument."/";
        $doc->actiu=true;
        $doc->save();

        }
         return view('CU12_URLDocument'); 
        
    }
}
