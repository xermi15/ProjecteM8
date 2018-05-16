<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;
use App\Usuari;
use App\UsuariGrup;
use App\Logs;
use Illuminate\Support\Facades\DB;

class CU_39Controller extends Controller {

    public function getCU_39() {
        return view('CU_39_ModificarMembres');
    }

    public function modificarGrup(Request $request) {

        $idusuari = $request->cu38_idusuari;
        $idgrup = $request->cu38_idgrup;
        //$usuarigrup = DB::select("SELECT * FROM usuarigrup WHERE idUsuari = " . $$idgrup . " AND idGrup = " . $idgrup );
        $usuarigrup = UsuariGrup::find($idusuari);
        $usuarigrup->delete();

        $nlog = new Logs;
        $nlog->idUsuari = $idusuari;
        $nlog->descripcio = "Modificar Grup";
        $nlog->dataLog = date('Y-m-d');
        $nlog->hora = date('H:i:s');
        $nlog->path = "";
        $nlog->save();

        return redirect('CU_36_GestionarGrups');
    }

    public function modificarGrup2(Request $request) {

        $idusuari = $request->cu39_idusuari;
        $idgrup = $request->cu39_idgrup;
        $user1 = new UsuariGrup;
        $user1->idUsuari = $idusuari;
        $user1->idGrup = $idgrup;
        $user1->save();


        $nlog = new Logs;
        $nlog->idUsuari = $idusuari;
        $nlog->descripcio = "Alta Usuari";
        $nlog->dataLog = date('Y-m-d');
        $nlog->hora = date('H:i:s');
        $nlog->path = "";
        $nlog->save();

        return redirect('CU_36_GestionarGrups');
    }

}
