<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;
use App\Usuari;
use App\UsuariGrup;

class CU_39Controller extends Controller {

    public function getCU_39(){
        $grups = Grup::all();
        $usuaris = Usuari::all();
        $usuariGrups = UsuariGrup::all();
        
        return view('CU_39_ModificarMembres', compact('grups','usuaris','usuariGrups'));
    }

}