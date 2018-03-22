<?php

namespace App\Http\Controllers;
use App\Usuari;
use Illuminate\Http\Request;

class CU_44Controller extends Controller {
        public function getIndex($id){
//             $usuari = Usuari::All();
//             return redirect('CU_42');
//          return view('CU_42');
             return view('CU_44', array('DadesUsuari'=>Usuari::findOrFail($id)));


        }
}
