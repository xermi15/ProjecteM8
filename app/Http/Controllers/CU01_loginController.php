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
            
            
            return view('CU07_OpenFolder',array('carpetes'=>Carpeta::where('idCarpetaPare', '=1')->get()),array('arxius'=>Document::where('idCarpeta', '=1')->get()));
        }else return view('CU01_login',['invalido'=>'Los datos no son validos']);
        
    }
}
