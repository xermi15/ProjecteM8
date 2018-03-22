<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Logs;

class CU_49Controller extends Controller
{
   public function filtraLogs(){
       $logs = array();
        $logs = Logs::join('usuaris', function($join)
        {
            $join->on('usuaris.idUsuari', '=', 'logs.idUsuari')
                 ->where($_GET['filtro'], '=', $_GET['cadena']);
        })->get();
        
        return view('CU_49_FiltraLogs')->with('logs', $logs);
       
    }
     
    
}
