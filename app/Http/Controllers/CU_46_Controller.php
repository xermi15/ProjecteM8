<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;

class CU_46_Controller extends Controller {

    public function mostrarGrups() {

        //$id = $_GET['id'];
        $id = 2;
        //$usuari = Usuari::findOrFail($id); // no funciona este metodo aqui
        //$usuari = Usuari::where('idUsuari', $id)->first(); // tampoco funciona este metodo aqui
        $usuari = DB::select("SELECT * FROM usuaris WHERE idUsuari = " . $id);

        $grups = DB::table('usuarigrup')
                        ->where('idUsuari', $id)
                        ->leftJoin('grups', 'usuarigrup.idGrup', '=', 'grups.idGrup')->get();

        $grupsTotals = DB::select("SELECT * FROM grups");

        return [$usuari, $grups, $grupsTotals];
    }

    public function modificarPertinencaGrups(Request $request) {

        $id = $request->cu46_idUsuari;
        $usuarigrup = DB::select("SELECT * FROM usuarigrup WHERE idUsuari = " . $id);
        //$grupsTotals = DB::select("SELECT * FROM grups");
        //$user1 = Usuari::findOrFail($id);

        $checked = $_POST['provincias'];

        if ($usuarigrup != null) {

            /* for ($i = 0; $i < count($checked); $i++) {
              echo "<br> Grups " . $i . ": " . $checked[$i];
              } */


            foreach ($checked as $i) {
                echo "Grupo: " . $i;
            }

            //Notification::success("L'usuari s'ha modificat correctament.");
            //return redirect('CU_42_GestionarUsuaris');
        } else {
            //Notification::error("Error!!! Aquest usuari ja existeix.");
            //return redirect('CU_42_GestionarUsuaris');
        }
    }

}
