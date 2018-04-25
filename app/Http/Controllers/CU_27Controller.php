<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use \App\crearPlantilla;
use App\plantillaRevisor;

class CU_27Controller extends Controller
{

public function getIndex(){
    $plantilla = crearPlantilla::all();
      $users = Usuari::all();
       return view('CU_27_EditarPlantilla', compact('plantilla', 'users'));
}


public function EditarPlantilla(Request $request ) {
       session_start();
       $plantilla->nomPlantilla= $request->nomPlantilla;
       $plantilla->idUsuariAprovador= $request->aprov;
       $plantilla->idUsuariCreador= $_SESSION['idUsuari'];
       $plantilla->save();
       
       $plantirevisors->idUsuariRevisor= $request->revi;
       $plantirevisors->idPlantilla=$plantilla->idPlantilla;
       $plantirevisors->save();
       
      
       return redirect ('/CU_50');

    }





}
