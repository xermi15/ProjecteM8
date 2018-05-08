<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use App\Carpeta;
use App\Document;
use App\Logs;

class CU01_loginController extends Controller
{
    //
    function login(Request $request){
        session_start();
        //return $request->input('user') . "----" . $request->input('password');
        $resultat = Usuari::where('nomUsuari', '=', $request->input('user'))->where('contrasenya', '=', $request->input('password'))->get();
        //return $resultat;
        if (count($resultat)==1){
            
           $_SESSION['idUsuari']=$resultat[0]->idUsuari;
           $_SESSION['nomUsuari']=$resultat[0]->nomUsuari;
           $_SESSION['nom']=$resultat[0]->nom;
           $_SESSION['cognoms']=$resultat[0]->cognoms;
           $_SESSION['tipus']=$resultat[0]->tipus;
           $_SESSION['carpetaActual']=$resultat[0]->carpetaActual;
           
           
           
           $doc = new Logs;
           $doc->idUsuari=$resultat[0]->idUsuari;
           $doc->descripcio="L'usuari".$resultat[0]->nomUsuari."a fet login";
           $doc->dataLog=date('Y-m-d');
           $log->hora = date('H:i:s');
           $doc->save();
 
           
            return redirect(url('/abrirCarpeta/personal'));
        }else return view('CU01_login',['invalido'=>'Los datos no son validos']);
        
    }
}
