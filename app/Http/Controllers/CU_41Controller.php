<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;
use App\Usuari;
use App\UsuariGrup;

class CU_41Controller extends Controller {

    public function getCU_41(){
        
        $grups = Grup::all();
        $usuaris = Usuari::all();
        $usuariGrups = UsuariGrup::all();
        
        return view('CU_41_MostrarGrups', compact('grups','usuaris','usuariGrups'));
        //return view('CU_41_MostrarGrups', array('usuaris'=>Usuari::all()),array('grups'=>Grup::all()),array('usuarisGrups'=>UsuariGrup::all()));
    }

}
