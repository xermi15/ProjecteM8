<?php

namespace App\Http\Controllers;
use App\Usuari;
use Illuminate\Http\Request;

class CU42Controller extends Controller {
        public function getIndex(){
            $usuari = Usuari::All();
             return view('CU42', ['usuari' => $usuari]);


        }
}



