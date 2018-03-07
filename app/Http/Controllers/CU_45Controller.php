<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Carbon\Carbon;
use Krucas\Notification\Facades\Notification;

class CU_45Controller extends Controller {
    /* public function getIndex() {
      return view('CU_45');
      } */

    public function mostraUsuari() {
        //$usuari = Usuari::where('idUsuari', 5)->get();
        //$usuari = Usuari::all();
        //var_dump($usuari);
        //return view('CU_45');
        return view('CU_45', array('usuari' => Usuari::where('idUsuari', 5)->get()));
    }

    /* public function mostraUsuari($id) {
      return view('CU_45', array('idUsuari' => Usuari::findOrFail(5)));
      } */

    public function modificarUsuari(Request $request) {

        /* $date = Carbon::now();
          //$date = $date->format('d-m-Y');

          $usuari = Usuari::where('email', $request->email)
          ->orwhere('nomUsuari', $request->nomUsuari)->first();

          if ($usuari == null) {
          //$usuari = new Usuari;
          $usuari->nomUsuari = $request->nomUsuari;
          $usuari->contrasenya = bcrypt($request->contrasenya);
          $usuari->nom = $request->nom;
          $usuari->cognoms = $request->cognoms;
          $usuari->email = $request->email;
          $usuari->dadesPostals = $request->dadesPostals;
          //$usuari->dataAlta = $date;
          $usuari->estat = $request->estat;
          $usuari->tipus = $request->tipus;
          $usuari->save();

          Notification::success("L'usuari s'ha modificat correctament.");
          return redirect('CU_45');
          } else {
          Notification::error("Error!!! Aquest usuari ja existeix.");
          return back()->withInput();
          } */
    }

}
