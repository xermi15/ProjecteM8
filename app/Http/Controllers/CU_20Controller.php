<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\Document;

class CU_20Controller extends Controller {

    public function eliminarCarpeta($id) {
        $carpeta = Carpeta::find($id);
        $idCarpeta = $carpeta->idCarpetaPare;
        $carpeta->delete();
        
        
        return redirect('abrirCarpeta/'.$idCarpeta);
    }
    
    public function eliminarDocumento($id) {
        $document = Document::find($id);
        $idDocument = $document->idCarpeta;
        $document->delete();
        
        
        return redirect('abrirCarpeta/'.$idDocument);
    }

}
