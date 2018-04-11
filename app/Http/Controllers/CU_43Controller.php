<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Usuari;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;

class CU_43Controller extends Controller {

    public function mostraUsuari() { // metode provisional per fer proves
        $id = 15;
        $user = Usuari::where('idUsuari', $id)->first();
        //$user_grup = UsuariGrup::where('idUsuari', $id)->get();
        $user_grup1 = DB::table('usuariGrup')
                ->where('idUsuari', $id)
                ->leftJoin('grups', 'usuariGrup.idGrup', '=', 'grups.idGrup')
                ->get();

        return view('CU_43_EliminarUsuari')->with('usuari', $user)
                        ->with('usuari_grup', $user_grup1);
    }

    /* public function mostraUsuari($idUsuari) { // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni
      $user = Usuari::where('idUsuari', $id)->first();
      return view('CU_43')->with('usuari', $user);
      } */

    public function eliminarUsuari() { //  metode provisional per fer proves
        //public function eliminarUsuari(Request $request, $id) { // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni
        $user = Usuari::where('idUsuari', 11)->first(); //  metode provisional per fer proves
        //$user = Usuari::findOrFail($idUsuari); // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni

        if ($user != null) {

            $user->delete();

            Notification::success("L'usuari " + $user->nomUsuari + " s'ha eliminat correctament.");
            //return redirect('CU_42_GestionarUsuaris');
            return redirect('CU_43_EliminarUsuari');
            //return redirect('/mostrarusuari/' . ($id));  //exemple per si es vol mostrar l'usuari q s'acaba de crear
        } else {
            Notification::error("Error!!! Aquest usuari no existeix.");
            //return redirect('CU_42_GestionarUsuaris');
            return redirect('CU_43_EliminarUsuari');
        }
    }

}
