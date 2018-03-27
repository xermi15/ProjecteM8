<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class CU06Controller extends Controller
{
    
    public function getEditarPerfil()
    {
        session_start();
        return view('CU06_EditarPerfil',array('usuari'=> Usuari::find($_SESSION['idUsuari'])));
    }
    
    public function editarPerfilEdit(Request $request)
    {   
        session_start();
        $user = Usuari::find($_SESSION['idUsuari']);
        $user->nomUsuari = $request->nomUsuari;
        if (strlen($request->contrasenya)>0):
            $user->contrasenya = $request->contrasenya;
        endif;
        $user->nom = $request->nom;
        $user->cognoms = $request->cognoms;
        $user->email = $request->email;
        $user->dadesPostals = $request->dadesPostals;
        $user->save();
        return redirect(url('/abrirCarpeta/root'));
    }
}
