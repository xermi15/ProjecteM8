<?php

namespace App\Http\Controllers;
use App\Usuari;
use Illuminate\Http\Request;

class CU_44Controller extends Controller {
        public function getIndex($id){
             return view('CU_44', array('DadesUsuari'=>Usuari::findOrFail($id)));
        }
        
        public function putNo($id) {
            echo $id;
            $retu = Usuari::findOrFail($id);
            $retu->estat = 0;
            $retu->save();
           // Notification::success("sa modificat correctament");
            return redirect()->action('CU42Controller@getIndex');
         } 

}
