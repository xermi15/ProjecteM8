<?php

namespace App\Http\Controllers;

use App\Usuari;

class CU_42_pruebaController extends Controller {

    public function mostrarUsuaris() {

        $usuaris = Usuari::all();
        return view('CU_42_prueba')->with('usuaris', $usuaris);
    }

}
