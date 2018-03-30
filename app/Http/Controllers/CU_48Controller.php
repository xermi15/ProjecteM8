<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class CU_48Controller extends Controller
{
    public function getIndex(){
        
        $users = \App\Usuari::all();
        return view('CU_48_MostrarUsuaris', compact('users'));
    }

}



