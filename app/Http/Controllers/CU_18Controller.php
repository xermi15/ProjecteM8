<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use App\PermisUsuari;
use App\PermisGrup;
use App\Usuari;
use App\Grup;
use Notification;

class CU_18Controller extends Controller {
    
    public function getDatos($id){
        session_start();
        $ar=[];
        $ar["cambiarUsuari"]="<option>Selecciona un usuari...</option>";
        $ar["afegirUsuari"]="<option>Selecciona un usuari...</option>";
        $ar["borrarUsuari"]="<option>Selecciona un usuari...</option>";
        $ar["cambiarGrup"]="<option>Selecciona un grup...</option>";
        $ar["afegirGrup"]="<option>Selecciona un grup...</option>";
        $ar["borrarGrup"]="<option>Selecciona un grup...</option>";
        
        //********************USUARIS********************
        $cambiarUsuari = Usuari::join("permisusuari","usuaris.idUsuari","=","permisusuari.idUsuari")
                        ->where('permisusuari.idCarpeta','=',$id)
                        ->get();
        foreach ($cambiarUsuari as $valor) {
            $ar["cambiarUsuari"].="<option id=".$valor->idUsuari.">".$valor->nom."</option>";
        }
        if (count($cambiarUsuari)==0) $ar["cambiarUsuari"]="<option>No s'ha trobat cap usuari amb permisos</option>";
        
        $afegirUsuari = Usuari::leftJoin("permisusuari","usuaris.idUsuari","=","permisusuari.idUsuari")
                        ->where('permisusuari.idCarpeta','!=',$id)
                        ->orWhereNull('permisusuari.idCarpeta')
                        ->get();
        foreach ($afegirUsuari as $valor) {
            $ar["afegirUsuari"].="<option id=".$valor->idUsuari.">".$valor->nom."</option>";
        }
        
        $borrarUsuari = Usuari::join("permisusuari","usuaris.idUsuari","=","permisusuari.idUsuari")
                        ->where('permisusuari.idCarpeta','=',$id)
                        ->get();
        foreach ($borrarUsuari as $valor) {
            $ar["borrarUsuari"].="<option id=".$valor->idUsuari.">".$valor->nom."</option>";
        }
        if (count($borrarUsuari)==0) $ar["borrarUsuari"]="<option>No s'ha trobat cap usuari amb permisos</option>";
        
        //********************GRUPS********************
        $cambiarGrup = Grup::join("permisgrup","grups.idGrup","=","permisgrup.idGrup")
                        ->where('permisgrup.idCarpeta','=',$id)
                        ->get();
        foreach ($cambiarGrup as $valor) {
            $ar["cambiarGrup"].="<option id=".$valor->idGrup.">".$valor->nom."</option>";
        }
        if (count($cambiarGrup)==0) $ar["cambiarGrup"]="<option>No s'ha trobat cap grup amb permisos</option>";
        
        $afegirGrup = Grup::leftJoin("permisgrup","grups.idGrup","=","permisgrup.idGrup")
                        ->where('permisgrup.idCarpeta','!=',$id)
                        ->orWhereNull('permisgrup.idCarpeta')
                        ->get();
        foreach ($afegirGrup as $valor) {
            $ar["afegirGrup"].="<option id=".$valor->idGrup.">".$valor->nom."</option>";
        }
        
        $borrarGrup = Grup::join("permisgrup","grups.idGrup","=","permisgrup.idGrup")
                        ->where('permisgrup.idCarpeta','=',$id)
                        ->get();
        foreach ($borrarGrup as $valor) {
            $ar["borrarGrup"].="<option id=".$valor->idGrup.">".$valor->nom."</option>";
        }
        if (count($borrarGrup)==0) $ar["borrarGrup"]="<option>No s'ha trobat cap grup amb permisos</option>";
        
        
        return $ar;
    }
    
    public function permisUsuari(Request $request){
        $idUsuari=$request->idUsuari;
        $idCarpeta=$request->idCarpeta;
        $permisoUsuario = PermisUsuari::where(['idUsuari' => $idUsuari,'idCarpeta' => $idCarpeta])->get();
        return $permisoUsuario[0]->tipusPermis;
    }
    
    public function permisGrup(Request $request){
        $idGrup=$request->idGrup;
        $idCarpeta=$request->idCarpeta;
        $permisoGrupo= PermisGrup::where(['idGrup' => $idGrup,'idCarpeta' => $idCarpeta])->get();
        return $permisoGrupo[0]->tipusPermis;
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
