<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Logs;


class CU_04Controller extends Controller
{
   public function consultarLogs(){
        
        $logs = Logs::join('usuaris', function($join)
        {
            $join->on('usuaris.idUsuari', '=', 'logs.idUsuari');
        })->get();
        
        return view('CU_04_ConsultarLogs')->with('logs', $logs);
    }
     
    
}
