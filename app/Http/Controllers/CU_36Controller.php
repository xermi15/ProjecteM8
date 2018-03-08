<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU_36Controller extends Controller
{
    private $arrayGrupos = array(
    array(
      'nombre' => 'prof_DAW',
      'miembros' => 'Carles Gomez, Oscar Robles, Joanet Puig' 
    ),
    array(
      'nombre' => 'alumn_DAW',
      'miembros' => 'Fede, Jorge, Ivan'
    ),
    array(
      'nombre' => 'ALUMNE1',
      'miembros' => 'Eduard, David Roig, Issam' 
      ),
    array(
      'nombre' => 'profesor987',
      'miembros' => 'Gloria Taboada, Eric Pajuelo, Joan Llorca' 
      )
  );
    
    public function getCU_36(){
     return view('CU_36_GestionarGrupos', array('arrayGrupos'=>$this->arrayGrupos));
  }
}
