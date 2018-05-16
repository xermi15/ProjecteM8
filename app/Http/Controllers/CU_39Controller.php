<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\Grup;
use App\UsuariGrup;
use App\Logs;

class CU_39Controller extends Controller {

    public function modificarGrup(Request $request) {

        //BORRA GRUP ANTERIOR
        $grup = Grup::where('idGrup', $request->idGrupEliminar)->first();
        $usuariGrup = UsuariGrup::where('idGrup', $request->idGrupEliminar)->first();

        //Guarda dades per tornar a crear el grup
        $dataCreacioGrup = $grup->dataCreacio;
        $idGrup = $grup->idGrup;
        $nomGrup = $grup->nom;


        if ($usuariGrup !== null) {

            //busca usuari grup 
            //si hay borra y vuelve a buscar
            //si no hay sale

            $arrayUsuarisGrup = UsuariGrup::where('idGrup', $idGrup)->get();
            // var_dump($arrayUsuarisGrup);
            foreach ($arrayUsuarisGrup as $idUsuariGrup) {
                $usuariGrup2 = UsuariGrup::where('idGrup', $idUsuariGrup->idGrup)->first();
                $usuariGrup2->delete();
            }

            /*
              $stringIdUsuarisGrup = $request->stringIdUsuarisGrup;
              $arrayidUsuarigrup = explode(",", $stringIdUsuarisGrup);
              foreach ($arrayidUsuarigrup as $idUsuariGrup) {
              $usuariGrup2 = UsuariGrup::where('idGrup', $request->idGrupEliminar)->first();
              $usuariGrup2->delete();
              }
             */
        }
        $grup->delete();

        //CREA NOU
        $grupMod = new Grup;
        $grupMod->idGrup = $idGrup;
        $grupMod->nom = $nomGrup;
        $grupMod->dataCreacio = $dataCreacioGrup;
        $grupMod->dataModificacio = date('Y-m-d');
        $grupMod->save();

        $stringIdUsuarisGrup = $request->stringUsuarisGrup;
        $arrayidUsuarigrup = explode(",", $stringIdUsuarisGrup);
        foreach ($arrayidUsuarigrup as $idUsuariGrup) {
            $usuariGrup = new UsuariGrup;
            $usuariGrup->idUsuari = $idUsuariGrup;
            $usuariGrup->idGrup = $grup->idGrup;
            $usuariGrup->save();
        }
        /*
          $nlog = new Logs;
          $nlog->idUsuari = $idusuari;
          $nlog->descripcio = "Modificar Grup";
          $nlog->dataLog = date('Y-m-d');
          $nlog->hora = date('H:i:s');
          $nlog->path = "";
          $nlog->save();
         */
        Notification::success("Grup modificat correctament");
        return redirect('CU_36_GestionarGrups');
    }

}
