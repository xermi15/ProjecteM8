<?php

use App\Http\Requests;
use App\Carpeta;
use Illuminate\Http\Request;
//use ZipArchive;

class CU_19Controller extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        echo $request->id."-".$request->nombre."-".$request->path;
        /*if($request->has('download')) {
            // Definimos la ruta
            $public_dir=$request->path;
            // Le damos el nombre al archivo
            $nom=$request->nom;
            $zipFileName = $nom.'.zip';
            // Creamos el objeto ZipArchive
            $zip = new ZipArchive;
            if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) {
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
            // Creamos una solicitud de descarga
            /*if(file_exists($filetopath)){
                return response()->download($filetopath,$zipFileName,$headers);
            }*/
            return view($filepath);
        
        
    }
}
