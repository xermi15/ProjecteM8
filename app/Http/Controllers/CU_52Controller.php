<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Carbon\Carbon;
use Krucas\Notification\Facades\Notification;

class CU_52Controller extends Controller {

    public function getIndex() {
        return view('CU_52_CrearUsuari');
    }

    public function afegirUsuari(Request $request) {

        $date = Carbon::now();
        //$date = $date->format('d-m-Y'); // no funciona donarli format a la data

        $usuari = Usuari::where('email', $request->email)
                        ->orwhere('nomUsuari', $request->nomUsuari)->first();

        if ($usuari == null) {
            $usuari = new Usuari;
            $usuari->nomUsuari = $request->nomUsuari;
            $usuari->contrasenya = bcrypt($request->contrasenya);
            //$usuari->contrasenya = $request->contrasenya;
            $usuari->nom = $request->nom;
            $usuari->cognoms = $request->cognoms;
            $usuari->email = $request->email;
            $usuari->dadesPostals = $request->dadesPostals;
            $usuari->dataAlta = $date;
            $usuari->estat = $request->estat;
            $usuari->tipus = $request->tipus;
            $usuari->save();

            Notification::success("L'usuari " + $usuari->nomUsuari + " s'ha creat correctament.");
            return redirect('CU_42_GestionarUsuaris');
        } else {
            Notification::error("Error!!! Aquest usuari ja existeix.");
            return redirect('CU_42_GestionarUsuaris');
        }
    }

}
