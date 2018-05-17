<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\URL_Document;
use App\Document;
use App\Http\Requests;

class CU_13Controller extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function generaPDF(Request $request, $id, $nombre, $path, $pathb, $formato) {
        //Agafem les dos path que ens arriven i les transformem en una sola ruta
        $ruta=$path.'/'.$pathb;
        //Fem que descarregui el arxiu que estobra en storage/app/ amb la ruta esmentada abans.
        return response()->download(storage_path("app/{$ruta}"));
    }
}
