<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\PermisUsuari;
use App\Usuari;
use Notification;

class CU_18Controller extends Controller {
    
    public function getDatos($id){
        session_start();
        $ar=[];
        $cambiarUsuari = PermisUsuari::where('idCarpeta', $id)->get();
        /*$articles = PermisUsuari::select('idUsuari.id as id_usuari')
            ->join('categories', 'articles.categories_id', '=', 'categories.id')
            ->where('idCarpeta', $id)
            ->get();*/
        foreach ($cambiarUsuari as $valor) {
            
        }
        $ar["cambiarUsuari"]="<option>aaa</option>";
        $ar["afegirUsuari"]="";
        $ar["borrarUsuari"]="";
        $ar["cambiarGrup"]="";
        $ar["afegirGrup"]="";
        $ar["borrarGrup"]="";
        
        
        return $ar;
    }
    
    public function cambiarPermisUsuari(Request $request, $id){
        dd("aaaa");
    }
    
    public function afegirPermisUsuari(Request $request, $id){
        
    }
    
    public function borrarPermisUsuari(Request $request, $id){
        
    }
    
    public function cambiarPermisGrup(Request $request, $id){
        
    }
    
    public function afegirPermisGrup(Request $request, $id){
        
    }
    
    public function borrarPermisGrup(Request $request, $id){
        
    }
}
