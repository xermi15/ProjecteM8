<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;
use Carbon\Carbon;
use Krucas\Notification\Facades\Notification;
use Illuminate\Validation\Rule;

class CU_45Controller extends Controller {

    public function mostraUsuari() { // metode provisional per fer proves
        $user = Usuari::where('idUsuari', 5)->first();
        return view('CU_45')->with('usuari', $user);
    }

    /* public function mostraUsuari($idUsuari) { // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni
      $user = Usuari::where('idUsuari', $id)->first();
      return view('CU_45')->with('usuari', $user);
      } */

    public function modificarUsuari(Request $request) { //  metode provisional per fer proves
        //public function modificarUsuari(Request $request, $id) { // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni
        //$date = Carbon::now(); // sol es fará servir si modifiquem la dataModificació
        $usuari = Usuari::where('email', $request->email) // si ja existeix l'usuari o email no deixa crearlo
                        ->orwhere('nomUsuari', $request->nomUsuari)->first();

        $user = Usuari::where('idUsuari', 5)->first(); //  metode provisional per fer proves
        //$user = Usuari::findOrFail($idUsuari); // metode correcte pero ha de rebre id d'altre cas d'us perque funcioni


        /*         * ***************** INTENTANDO VALIDAR EMAIL PARA QUE NO LO TENGA EN CUENTA**************** */
        /* Validator::make($data, [
          'email' => [
          'required',
          Rule::unique('usuaris')->ignore($usuari->email, 'idUsuari'),
          ],
          ]); */

        /* $this->validate($request, [
          'email' => [
          'required',
          Rule::unique('usuaris')->ignore($usuari->email, 'idUsuari'),
          ],
          ]); */
        /*         * ********************************************************************************************* */

        if ($usuari == null) {

            $user->nomUsuari = $request->nomUsuari;
            $user->contrasenya = bcrypt($request->contrasenya);
            $user->nom = $request->nom;
            $user->cognoms = $request->cognoms;
            $user->email = $request->email;
            $user->dadesPostals = $request->dadesPostals;
            //$user->dataModificacio = $date; // sol es fará servir si modifiquem la dataModificació
            $user->estat = $request->estat;
            $user->tipus = $request->tipus;
            $user->save();

            Notification::success("L'usuari s'ha modificat correctament.");
            return redirect('CU_45');
            //return redirect('/mostrarusuari/' . ($id));  //exemple per si es vol mostrar l'usuari q s'acaba de crear
        } else {
            Notification::error("Error!!! Aquest usuari ja existeix.");
            return back()->withInput();
        }
    }

}
