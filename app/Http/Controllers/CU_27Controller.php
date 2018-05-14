<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use \App\crearPlantilla;
use App\plantillaRevisor;

class CU_27Controller extends Controller {

public function getIndex(){
    $plantilla = crearPlantilla::all();
      $users = Usuari::all();
       return view('CU_27_EditarPlantilla', compact('plantilla', 'users'));
}


public function editarPlantilla(Request $request, $id) {
    //var_dump($id);
       $plantillas = crearPlantilla::findOrFail($id);
       //$plantillas->nomPlantilla = $request->nomPlantilla;
       //var_dump($plantilla->idUsuariAprovador);
       $plantillas->save();
       
       $userAprov = Usuari::all();
       //$userAprov = Usuari::findOrFail($plantilla->idUsuariAprovador);
       //var_dump($userAprov);
       $usersRev = plantillaRevisor::findOrFail($id);
      // var_dump($usersRev);
//       session_start();
       
       return view('CU_27_EditarPlantilla', compact('plantillas', 'userAprov', 'usersRev'));
       //
//       $plantilla->nomPlantilla= $request->nomPlantilla;
//       $plantilla->idUsuariAprovador= $request->aprov;
//       $plantilla->idUsuariCreador= $_SESSION['idUsuari'];
//       $plantilla->save();
//       
//       $plantirevisors->idUsuariRevisor= $request->revi;
//       $plantirevisors->idPlantilla=$plantilla->idPlantilla;
//       $plantirevisors->save();
       
      
      // return redirect ('/CU_50');

    }
    

}