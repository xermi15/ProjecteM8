<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\Grup;
use App\UsuariGrup;

class CU_40Controller extends Controller {

    public function getCU_40() {

        return redirect('CU_36_GestionarGrups');
    }

    public function afegirGrup(Request $request) {
        $grup = Grup::where('nom', $request->cu_40nomGrup)->first();
        if ($grup == null) {
            $grup = new Grup;
            $grup->nom = $request->cu_40nomGrup;
            $grup->dataCreacio = date('Y-m-d');
            $grup->dataModificacio = date('Y-m-d');
            $grup->save();
        } else {
            Notification::error("Error al crear grup");
            return redirect('CU_36_GestionarGrups');
        }



        $stringUsuarisGrup = $request->stringUsuarisGrup;
        $usuarisGrup = explode(",", $stringUsuarisGrup);


        foreach ($usuarisGrup as $idUsuarigrup) {

            $usuariGrup = new UsuariGrup;
            $usuariGrup->idUsuari = $idUsuarigrup;
            $usuariGrup->idGrup = $grup->idGrup;
            $usuariGrup->save();
            
        }
        Notification::success("Grup creat correctament.");
        return redirect('CU_36_GestionarGrups');
    }

}