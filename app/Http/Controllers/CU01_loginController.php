<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use App\Carpeta;
use App\Document;

class CU01_loginController extends Controller
{
    //
    function login(Request $request){
        //return $request->input('user') . "----" . $request->input('password');
        $resultat = Usuari::where('nomUsuari', '=', $request->input('user'))->where('contrasenya', '=', $request->input('password'))->get();
        //return $resultat;
        if (count($resultat)==1){
            
           $_SESSION['idUsuari']=$resultat[0]->idUsuari;
         
            
            return redirect(url('/abrirCarpeta/root'));
        }else return view('CU01_login',['invalido'=>'Los datos no son validos']);
        
    }
}
