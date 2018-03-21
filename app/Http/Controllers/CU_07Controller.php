<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\Document;

class CU_07Controller extends Controller {

    public function abrirCarpeta($id) {
        return view('CU07_OpenFolder', 
                array('carpetes'=>Carpeta::where('idCarpetaPare', '=', $id)->get()),
                array('arxius'=>Document::where('idCarpeta', '=', $id)->get()))->withTitle($id);
    }

}
