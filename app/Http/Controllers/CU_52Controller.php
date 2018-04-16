<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Krucas\Notification\Facades\Notification;

class CU_52Controller extends Controller {

    public function getIndex() {

        //return redirect('CU_42_GestionarUsuaris');
        return redirect('CU_42_prueba');
    }

    public function afegirUsuari(Request $request) {

        $usuari = Usuari::where('email', $request->cu_52email)
                        ->orwhere('nomUsuari', $request->cu_52nomUsuari)->first();

        if ($usuari == null) {
            $usuari = new Usuari;
            $usuari->nomUsuari = $request->cu_52nomUsuari;
            //$usuari->contrasenya = bcrypt($request->cu_52contrasenya);
            $usuari->contrasenya = $request->cu_52contrasenya;
            $usuari->nom = $request->cu_52nom;
            $usuari->cognoms = $request->cu_52cognoms;
            $usuari->email = $request->cu_52email;
            $usuari->dadesPostals = $request->cu_52dadesPostals;
            $usuari->dataAlta = date('Y-m-d');
            $usuari->estat = $request->cu_52estat;
            $usuari->tipus = $request->cu_52tipus;
            $usuari->save();

            Notification::success("L'usuari s'ha creat correctament.");
            //return redirect('CU_42_GestionarUsuaris');
            return redirect('CU_42_prueba');
        } else {
            Notification::error("Error!!! Aquest usuari ja existeix.");
            //return redirect('CU_42_GestionarUsuaris');
            return redirect('CU_42_prueba');
        }
    }

}
