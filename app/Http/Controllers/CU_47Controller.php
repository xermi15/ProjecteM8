<?php

namespace App\Http\Controllers;
use App\Usuari;
use Illuminate\Http\Request;

class CU_47Controller extends Controller {
        public function getIndex($id){
//             $usuari = Usuari::All();
//             return redirect('CU_42');
//          return view('CU_42');
             return view('CU_47', array('DadesUsuari'=>Usuari::findOrFail($id)));


        }
}
