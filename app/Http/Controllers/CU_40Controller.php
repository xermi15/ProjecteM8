<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\Grup;
use App\UsuariGrup;

class CU_40Controller extends Controller {

    public function afegirGrup(Request $request) {

        $grup = Grup::where('nom', $request->nom_Grup)->first();
        $nomGrup = $grup->nom;
        
        if ($grup == null) {
            $grup = new Grup;
            $grup->nom = $request->nom_Grup;
            $grup->dataCreacio = date('Y-m-d');
            $grup->dataModificacio = date('Y-m-d');
            $grup->save();

            $stringIdUsuarisGrup = $request->stringUsuarisGrup;

            if ($stringIdUsuarisGrup !== null) {
                $arrayidUsuarigrup = explode(",", $stringIdUsuarisGrup);
                foreach ($arrayidUsuarigrup as $idUsuariGrup) {
                    $usuariGrup = new UsuariGrup;
                    $usuariGrup->idUsuari = $idUsuariGrup;
                    $usuariGrup->idGrup = $grup->idGrup;
                    $usuariGrup->save();
                }
            }
            
            $nlog = new Logs;
            $nlog->idUsuari = 1; //usuari admin. CORREGIR POR USUARIO QUE HA INICIADO SESION
            $nlog->descripcio = "Grup creat: '" + $nomGrup + "'";
            $nlog->dataLog = date('Y-m-d');
            $nlog->hora = date('H:i:s');
            $nlog->path = "";
            $nlog->save();

            Notification::success("Grup creat correctament.");
            return redirect('CU_36_GestionarGrups');
        } else {
            Notification::error("Ja existeix un grup amb aquest nom");
            return redirect('CU_36_GestionarGrups');
        }
    }

}
