<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;

class CU_40Controller extends Controller {

    public function getCU_40(){
        return redirect('/CU_36_GestionarGrups');
    }

    public function afegirGrup(Request $request) {

        $grup = Grup::where('nom', $request->cu_40nomGrup)->first();

        if ($grup == null) {
            $grup = new Grup;
            $grup->nom = $request->cu_40nomGrup;
            //$grup->idUsuariCreacio = $request->cu_40idUsuariCreacio;
            //$grup->idUsuariModificacio = $request->cu_40idUsuariModificacio;
            $grup->dataCreacio = date('Y-m-d');
            $grup->dataModificacio = date('Y-m-d');
            $grup->save();

            return redirect('CU_36_GestionarGrups');
        }
    }

}
