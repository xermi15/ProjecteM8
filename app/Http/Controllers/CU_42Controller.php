<?php

namespace App\Http\Controllers;
use App\Usuari;
use Illuminate\Http\Request;

class CU_42Controller extends Controller {
        public function getIndex(){
//             $usuari = Usuari::All();
//             return redirect('CU_42');
//          return view('CU_42');
             return view('CU_42_GestionarUsuaris', array('arrayUsuaris'=>Usuari::all()));


        }
        
        public function putNo($id) {
            echo $id;
            $retu = Usuari::findOrFail($id);
            $retu->estat = 0;
            $retu->save();
           // Notification::success("sa modificat correctament");
            return redirect()->action('CU_42Controller@getIndex');
         } 
}
