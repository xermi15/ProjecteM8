<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenFolderController extends Controller {

    public function openFolder() {
        return view('CU07_OpenFolder');
    }

}
