<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\Document;

class CU_20Controller extends Controller {

    public function crearCarpeta($id) {
                
        
        return redirect('abrirCarpeta/'.$id);
    }

}
