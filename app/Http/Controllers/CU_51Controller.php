<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU_51Controller extends Controller
{
    public function tancarSessio()
    {
        Session::flush();
        return view('CU01_login');
    }
}
