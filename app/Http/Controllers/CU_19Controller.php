<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Carpeta;
use Illuminate\Http\Request;
use ZipArchive;

class CU_19Controller extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id, $path, $nombre)
    {
        //echo $id."-".$path."-".$nombre;
        // Definimos la ruta
        $public_dir=$path;
        // Le damos el nombre al archivo
        $nom=$nombre;
        $zipFileName = $nom.'.zip';
        // Creamos el objeto ZipArchive
        //echo $zip;
        $zip = new ZipArchive;
        if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) {
            echo $nombre;
            // Añadimos el archivo en ZipArchive
            $zip->addFile(file_path,'file_name');
            // Cerramos ZipArchive     
            $zip->close();
        }
        // Colocamos una cabecera
        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );
        $filetopath=$public_dir.'/'.$zipFileName;
        echo $filetopath;
        // Creamos una solicitud de descarga
        if(file_exists($filetopath)){
            echo "hola";
            return response()->download($filetopath,$zipFileName,$headers);
        }
        //return view("a");
        
    }
}
