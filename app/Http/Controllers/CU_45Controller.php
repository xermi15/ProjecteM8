<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use App\UsuariGrup;
use App\Grup;
use Carbon\Carbon;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;

class CU_45Controller extends Controller {

    public function mostraUsuari() { // metode provisional per fer proves
        $id = 5;
        $user = Usuari::where('idUsuari', $id)->first();
        //$user_grup = UsuariGrup::where('idUsuari', $id)->get();
        $user_grup1 = DB::table('usuariGrup')
                ->where('idUsuari', $id)
                ->leftJoin('grups', 'usuariGrup.idGrup', '=', 'grups.idGrup')
                ->get();

        return view('CU_45_ModificarUsuari')->with('usuari', $user)
                        ->with('usuari_grup', $user_grup1);
    }

    public function modificarUsuari(Request $request) { //  metode provisional per fer proves
        //public function modificarUsuari(Request $request, $id) { // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni
        //$date = Carbon::now(); // sol es fará servir si modifiquem la dataModificació
        $id = 5;
        $usuari = DB::select("SELECT * FROM usuaris WHERE idUsuari <> " . $id . " AND (nomUsuari = '" . $request->nomUsuari . "' OR email = '" . $request->email . "')");

        $user1 = Usuari::where('idUsuari', $id)->first(); //  metode provisional per fer proves
        //$user1 = Usuari::findOrFail($idUsuari); // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni

        if ($usuari == null) {

            $user1->nomUsuari = $request->nomUsuari;
            $user1->contrasenya = bcrypt($request->contrasenya);
            //$user1->contrasenya = $request->contrasenya;
            $user1->nom = $request->nom;
            $user1->cognoms = $request->cognoms;
            $user1->email = $request->email;
            $user1->dadesPostals = $request->dadesPostals;
            //$user->dataModificacio = $date; // sol es fará servir si modifiquem la dataModificació
            $user1->estat = $request->estat;
            $user1->tipus = $request->tipus;
            $user1->save();

            Notification::success("L'usuari s'ha modificat correctament.");
            return redirect('CU_42_GestionarUsuaris');
            //return redirect('/mostrarusuari/' . ($id));  //exemple per si es vol mostrar l'usuari q s'acaba de crear
        } else {
            Notification::error("Error!!! Aquest usuari ja existeix.");
            return redirect('CU_42_GestionarUsuaris');
        }
    }

}
