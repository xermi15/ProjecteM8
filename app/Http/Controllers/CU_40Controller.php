<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\Grup;
use App\UsuariGrup;

class CU_40Controller extends Controller {

    public function afegirGrup(Request $request) {

        $grup = Grup::where('nom', $request->nom_Grup)->first();

        if ($grup == null) {
            $grup = new Grup;
            $grup->nom = $request->nom_Grup;
            $grup->dataCreacio = date('Y-m-d');
            $grup->dataModificacio = date('Y-m-d');
            $grup->save();

            $stringIdUsuarisGrup = $request->stringUsuarisGrup;
            $arrayidUsuarigrup = explode(",", $stringIdUsuarisGrup);
            foreach ($arrayidUsuarigrup as $idUsuariGrup) {
                $usuariGrup = new UsuariGrup;
                $usuariGrup->idUsuari = $idUsuariGrup;
                $usuariGrup->idGrup = $grup->idGrup;
                $usuariGrup->save();
            }
            Notification::success("Grup creat correctament.");
            return redirect('CU_36_GestionarGrups');
        } else {
            Notification::error("Ja existeix un grup amb aquest nom");
            return redirect('CU_36_GestionarGrups');
        }
    }

}
