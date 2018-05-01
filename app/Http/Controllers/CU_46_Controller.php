<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;

class CU_46_Controller extends Controller {

    public function mostrarGrups() {

        /* $id = $_GET['id'];
          //$usuari = Usuari::findOrFail($id); // no funciona este metodo aqui
          //$usuari = Usuari::where('idUsuari', $id)->first(); // tampoco funciona este metodo aqui
          $usuari = DB::select("SELECT * FROM usuaris WHERE idUsuari = " . $id);

          $grups = DB::table('usuarigrup')
          ->where('idUsuari', $id)
          ->leftJoin('grups', 'usuarigrup.idGrup', '=', 'grups.idGrup')->get();

          $grupsTotals = Grup::all();

          return [$usuari, $grups, $grupsTotals]; */
    }

    public function modificarPertinencaGrups(Request $request) {

        $id = $request->cu45_idUsuari;
        $usuari = DB::select("SELECT * FROM usuaris WHERE idUsuari <> " . $id . " AND (nomUsuari = '" . $request->nomUsuari . "' OR email = '" . $request->email . "')");

        $user1 = Usuari::findOrFail($id);

        if ($usuari == null) {

            $user1->save();

            Notification::success("L'usuari s'ha modificat correctament.");
            return redirect('CU_42_GestionarUsuaris');
        } else {
            Notification::error("Error!!! Aquest usuari ja existeix.");
            return redirect('CU_42_GestionarUsuaris');
        }
    }

}
