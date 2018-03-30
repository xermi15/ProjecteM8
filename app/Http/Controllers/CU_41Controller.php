<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;
use App\Usuari;
use App\UsuariGrup;

class CU_41Controller extends Controller {

    public function getCU_41(){
        
        $grups = \App\Grup::all();
        $usuaris = \App\Usuari::all();
        $usuariGrups = \App\UsuariGrup::all();
        
        return view('CU_41_MostrarGrups', compact('grups','usuaris','usuariGrups'));
    }

}
