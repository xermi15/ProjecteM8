<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\URL_Document;
use App\Document;
use App\Http\Requests;

class CU_13Controller extends Controller
{
    public function generaPDF($id, $path, $nombre, $formato) {
        echo "hola gorila";
        echo $id;
        echo $path;
        echo $nombre;
        if(is_file($path)){
            if($formato == 'pdf'){
            
                
            }
        }
        return redirect('abrirCarpeta/3');
    }
}
