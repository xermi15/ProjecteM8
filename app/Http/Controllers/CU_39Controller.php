<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;
use App\Usuari;
use App\UsuariGrup;
use Illuminate\Support\Facades\DB;

class CU_39Controller extends Controller {

    public function getCU_39(){
        $grups = Grup::all();
        $usuaris = Usuari::all();
        $usuariGrups = UsuariGrup::all();
        
        return view('CU_39_ModificarMembres', compact('grups','usuaris','usuariGrups'));
    }
    
     public function modificarGrup(Request $request) {

        $idusuari = $request->idusuari;
        $idgrup = $request->idgrup;
        
        $usuarigrup = DB::select("SELECT * FROM usuarigrup WHERE idUsuari = " . $idusuari . " AND idGrup = " . $idgrup );

        $usuarigrup->delete();

        return redirect('CU_36_GestionarGrups');
        }
    }

