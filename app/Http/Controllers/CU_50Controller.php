<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\crearPlantilla;
use App\Usuari;

class CU_50Controller extends Controller
{
   public function getIndex() {
      $plantilla = crearPlantilla::all();
       return view('CU_50', compact('plantilla'));
     // return view('CU_50');
    }
    
    /*public function MostraUsuari() {
      $users = Usuari::all(); 
     
        return view('CU_50', compact('users'));
    }*/
    
    
    
}
