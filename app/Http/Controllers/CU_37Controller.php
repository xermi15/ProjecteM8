<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use App\Grup;

class CU_37Controller extends Controller {

    public function getCU_37($id) {
        $grup = Grup::findOrFail($id);
        $grup->delete();
        Notification::success("El grup s'ha eliminat correctament.");

        return redirect('/CU_36_GestionarGrups');
    }

}
