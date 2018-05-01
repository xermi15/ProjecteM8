<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Storage;
//use App\Http\Requests\UploadRequest;

use App\Document;


class CU_15Controller extends Controller
{
    private function eliminarVigents($id){
        Document::where('idDocument','=',$id)
                    ->where('vigent','=',1)
                    ->update(['vigent' => 0]); 
    } 
    
    public function getPromocionarVersio($id,$versioInterna){
        $this->eliminarVigents($id);
        
        Doucment::where('idDocument','=',$id)
                  ->where('versioInterna','=',$versioInterna)
                  ->update(['vigent' => 1]);
        
        //He fet servir el mètode statement perquè el Eloquent em donava error
        //\Illuminate\Support\Facades\DB::statement("UPDATE `documents` SET `vigent`=1 WHERE `idDocument`=".$id." AND `versioInterna` = ".$versioInterna);
        
        $this->registrarLog("S'ha promocionat la versió ".$versioInterna." dels document ".$id);
    }
    
    private function registrarLog($desc){
        $log = new Logs;
        if(isset($_SESSION['idUsuari'])){
            $log->idUsuari = $_SESSION['idUsuari'];
        }
        $log->descripcio = $desc;
        $log->dataLog = date('Y-m-d');
        $log->hora = date('H:i:s');
        $log->save();
    }
}
