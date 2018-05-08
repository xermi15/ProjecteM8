<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Logs;

class CU_51Controller extends Controller
{
    public function tancarSessio()
    {
       session_start();
        
       $log = new Logs;
       $log->idUsuari= $_SESSION['idUsuari'];
       $log->descripcio="L'usuari ".$_SESSION['nomUsuari']." a tancat sessio";
       $log->dataLog=date('Y-m-d');
       $log->hora = date('H:i:s');
       $log->path = " ";
       $log->save();
           
        Session::flush();
        return redirect('CU01_login');
    }
}
