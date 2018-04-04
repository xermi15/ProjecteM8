<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;

use App\Document;
use App\Carpeta;

class CU_15Controller extends Controller
{
    private function eliminarVigents($id){
        $documents = Document::where('idDocument','=',$id)
                             ->where('vigent','=',1)
                             ->get();
        
        foreach ($documents as $tmp) {
            echo "S'ha posat a 0 la versio ".$tmp->versioInterna."<br>";
            $tmp->vigent = 0;
            $tmp->save();
        }
    } 
    
    public function getPromocionarVersio($id,$versioInterna){
        $this->eliminarVigents($id);
        //He fet servir el mètode statement perquè el Eloquent em donava error
        \Illuminate\Support\Facades\DB::statement("UPDATE `documents` SET `vigent`=1 WHERE `idDocument`=".$id." AND `versioInterna` = ".$versioInterna);
    }
    
    
}
