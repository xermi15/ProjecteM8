<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU_17Controller extends Controller {

    public function eliminarVersioDocument(Request $request) {

        $id = $request->cu17_idUsuari;
        $user = Usuari::findOrFail($id);
        $nlog = Logs::where('idLog', $request->cu17_idLog)->first();

        if ($user != null && $nlog == null) {
            
            //Registrar Log
            $nlog = new Logs;
            $nlog->idUsuari =$id; 
            $nlog->descripcio = "Eliminar versió document";  
            $nlog->dataLog = date('Y-m-d');
            $nlog->hora = date('H:i:s');
            $nlog->path = "";
            $nlog->save();
            
            $VersioDocument->delete();
            
            Notification::success("La versió del document s'ha eliminat.");
            return redirect('CU_16_VeureVersioDocument');
        } else {
            Notification::error("No s'ha pogut esborrar la versió del document");
            return redirect('CU_16_VeureVersioDocument');
        }

        /* Falta eliminar carpeta o pertinença agrups??   */
    }

}