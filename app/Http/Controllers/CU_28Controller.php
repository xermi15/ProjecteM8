<?php

namespace App\Http\Controllers;
use App\crearPlantilla;
use App\plantillaRevisor;


use Illuminate\Http\Request;

class CU_28Controller extends Controller
{
     public function getEliminarPlatilla(){
        $plantilla = crearPlantilla::all();
        return view('CU_28_EliminarPlantilla', compact('plantilla'));
    }
}
