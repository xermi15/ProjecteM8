<?php

namespace App\Http\Controllers;

use App\Usuari;

class CU_42_Controller extends Controller {

    public function mostrarUsuaris() {

        $user = Usuari::all();
        return view('CU_42_GestionarUsuaris')->with('user', $user);
    }

}
