<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CU_51Controller extends Controller
{
    public function tancarSessio()
    {
        Session::flush();
        return redirect('CU01_login');
    }
}
