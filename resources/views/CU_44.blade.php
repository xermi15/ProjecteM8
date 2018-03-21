 <!DOCTYPE html>
@extends('layouts.master')

@section('content')
        <link href="{{ url('/css/CU_47.css') }}" rel="stylesheet">
        <div id="containerr">
            
                <div class="text-center darkColor" style="padding: 7px">Gestionar Usuarios</div>
                <br>  
                
         </div>      
        <div class="text-center" id="containerr2">
            <div class="text-center darkColor" style="padding: 7px">Donar d'alta</div>
          

        {{-- Totes les dades de l`usuari --}}

        <h5> Nom Usuari: {{$DadesUsuari->nomUsuari}}</h5>
        <h5> Nom: {{$DadesUsuari->nom}}</h5>
        <h5> Cognom: {{$DadesUsuari->cognoms}}</h5>
        <h5> Email: {{$DadesUsuari->email}}</h5>
        <h5> Dades Postals: {{$DadesUsuari->dadesPostals}}</h5>
        <h5> Data Alta: {{$DadesUsuari->dataAlta}}</h5>
        <h5> Estat: {{$DadesUsuari->estat}}</h5>
        
        <?php
        if (($DadesUsuari->estat)==1) {
            echo "<p> <label>Donat de baixa: </label>No<p>";
            echo " ";
            echo ("<button type='button' class='btn btn-warning'>Donar de baixa a l'usuari</button>");
            echo " ";
            echo ("<button type='button' class='btn btn-warning'>Cancelar</button>");
        }
        elseif (($DadesUsuari->estat)==0) {
            echo "<p> <label>Donat de baixa </label>Si<p>";
            echo " ";
            echo ("<button type='button' class='btn btn-warning'>Cancelar</button>");
        }
        ?>
        
        
            
        </div>
  @stop            
    
               
        
       