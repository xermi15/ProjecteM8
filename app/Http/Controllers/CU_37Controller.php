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

        if ($usuariGrup !== null) {

            $stringIdUsuarisGrup = $request->stringIdUsuarisGrup;
            $arrayidUsuarigrup = explode(",", $stringIdUsuarisGrup);
            foreach ($arrayidUsuarigrup as $idUsuariGrup) {

                $usuariGrup2 = UsuariGrup::where('idGrup', $request->idGrupEliminar)->first();
                $usuariGrup2->delete();
            }
            Notification::success("Elimina grup amb usuaris");
        } else {
            Notification::success("Elimina grup sense usuaris");
        }
        $grup->delete();
        return redirect('CU_36_GestionarGrups');
    }

}
