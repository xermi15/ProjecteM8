<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\Grup;
use App\UsuariGrup;

class CU_37Controller extends Controller {

    public function eliminarGrup(Request $request) {
        
        $grup = Grup::where('idGrup', $request->idGrupEliminar)->first();
        $usuariGrup = UsuariGrup::where('idGrup', $request->idGrupEliminar)->first();
        $nomGrup = $grup->nom;
        
        if ($grup !== null) {
            
            if ($usuariGrup !== null) {

                $arrayUsuarisGrup = UsuariGrup::where('idGrup', $request->idGrupEliminar)->get();
                foreach ($arrayUsuarisGrup as $idUsuariGrup) {
                    $usuariGrup2 = UsuariGrup::where('idGrup', $request->idGrupEliminar)->first();
                    $usuariGrup2->delete();
                }
            }
            $grup->delete();
            
            $nlog = new Logs;
            $nlog->idUsuari = 1; //usuari admin. CORREGIR POR USUARIO QUE HA INICIADO SESION
            $nlog->descripcio = "Grup eliminat: '" + $nomGrup + "'";
            $nlog->dataLog = date('Y-m-d');
            $nlog->hora = date('H:i:s');
            $nlog->path = "";
            $nlog->save();
            
            Notification::success("Grup eliminat correctament");
            return redirect('CU_36_GestionarGrups');
        } else {
            Notification::success("No s'ha pogut eliminar el grup");
            return redirect('CU_36_GestionarGrups');
        }
    }

}
