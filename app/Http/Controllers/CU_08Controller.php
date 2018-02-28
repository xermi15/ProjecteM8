<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU_08Controller extends Controller
{
    public function getPujarDoc(){
        return view('CU_08_PujarDoc');
    }
    
    public function postPujarDoc(){
        //Request $request
        echo "S'ha de pujar el document a la base de dades";
    }
}
