<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grup;

class CU_37Controller extends Controller {

    public function getCU_37($id) {
        $grup = Grup::findOrFail($id);
        $grup->delete();

        return redirect('/CU_36_GestionarGrupos');
    }

}
