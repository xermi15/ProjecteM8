<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class CU06Controller extends Controller
{
    public function getEditarPerfil($id)
    {
        return view('CU06_EditarPerfil',array('usuari'=> Usuari::find($id)));
    }
    
    public function editarPerfilEdit(Request $request,$id)
    {   
        $user = Usuari::find($id);
        $user->nomUsuari = $request->nomUsuari;
        if (strlen($request->contrasenya)>0):
            $user->contrasenya = $request->contrasenya;
        endif;
        $user->nom = $request->nom;
        $user->cognoms = $request->cognoms;
        $user->email = $request->email;
        $user->dadesPostals = $request->dadesPostals;
        $user->save();
        return redirect('editarPerfil/'.$id);
    }
}
