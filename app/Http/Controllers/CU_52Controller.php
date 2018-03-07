<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Carbon\Carbon;
use Krucas\Notification\Facades\Notification;

class CU_52Controller extends Controller {

    public function getIndex() {
        return view('CU_52');
    }

    public function afegirUsuari(Request $request) {

        $date = Carbon::now();
        //$date = $date->format('d-m-Y');

        $usuari = Usuari::where('email', $request->email)
                        ->orwhere('nomUsuari', $request->nomUsuari)->first();

        if ($usuari == null) {
            $usuari = new Usuari;
            $usuari->nomUsuari = $request->nomUsuari;
            $usuari->contrasenya = bcrypt($request->contrasenya);
            $usuari->nom = $request->nom;
            $usuari->cognoms = $request->cognoms;
            $usuari->email = $request->email;
            $usuari->dadesPostals = $request->dadesPostals;
            $usuari->dataAlta = $date;
            $usuari->estat = $request->estat;
            $usuari->tipus = $request->tipus;
            $usuari->save();

            Notification::success("L'usuari s'ha creat correctament.");
            return redirect('CU_52');
        } else {
            Notification::error("Error!!! Aquest usuari ja existeix.");
            return back()->withInput();
        }
    }

}
