<?php

namespace App\Http\Controllers;
use App\Usuari;
use Illuminate\Http\Request;

class CU_47Controller extends Controller {
    
        public function getIndex($id){
             return view('CU_47', array('DadesUsuari'=>Usuari::findOrFail($id)));
        }
        
        public function putSi($id) {
            echo $id;
            $retu = Usuari::findOrFail($id);
            $retu->estat = 1;
            $retu->save();
           // Notification::success("sa modificat correctament");
            return redirect()->action('CU42Controller@getIndex');
         } 
         
         
        
}
