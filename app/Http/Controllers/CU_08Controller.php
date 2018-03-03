<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Document;

class CU_08Controller extends Controller
{
    public function getPujarDoc(){
        return view('CU_08_PujarDoc');
    }
    
    public function postPujarDoc(Request $request){
        echo "Aquí es pujaria el document a la base de dades.";
        echo "<br>";
        echo "El nom del fitxer es: ".$request->input('nom');
        
        //return redirect()('/CU_2');
    }
}
