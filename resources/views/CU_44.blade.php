 <!DOCTYPE html>
@extends('layouts.master')

@section('content')
        <link href="{{ url('/css/CU_47.css') }}" rel="stylesheet">
        <div id="containerr">
            
                <div class="text-center darkColor" style="padding: 7px">Gestionar Usuarios</div>
                <br>  
                
         </div>      
        <div class="text-center" id="containerr2">
            <div class="text-center darkColor" style="padding: 7px">Donar de baixa</div>
          

        {{-- Totes les dades de l`usuari --}}

        <h5> Nom Usuari: {{$DadesUsuari->nomUsuari}}</h5>
        <h5> Nom: {{$DadesUsuari->nom}}</h5>
        <h5> Cognom: {{$DadesUsuari->cognoms}}</h5>
        <h5> Email: {{$DadesUsuari->email}}</h5>
        <h5> Dades Postals: {{$DadesUsuari->dadesPostals}}</h5>
        <h5> Data Alta: {{$DadesUsuari->dataAlta}}</h5>
        <!--<h5> Estat: {{$DadesUsuari->estat}}</h5>-->
        
        @if( ($DadesUsuari->estat)==1 )
             <p> <label>Donat de baixa: </label> No<p>
              
            <form action="{{action('CU_44Controller@putNo', $DadesUsuari->idUsuari)}}" 
                method="POST" style="display:inline">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-info" style="display:inline">
                    Donar de baixa
                </button>
            </form>
              
              <a href="{{ url('/CU_42/') }}">
                  <button type='button' class='btn btn-warning'>Tornar al gestionar usuaris</button>
              </a>
        @elseif ( ($DadesUsuari->estat)==0 )
              <p> <label>Donat de baixa: </label> Si<p>
              <p><i>Aquest usuari ja estat donat de baixa</i></p>
              <a href="{{ url('/CU_42/') }}">
               <button type='button' class='btn btn-warning'>Tornar al gestionar usuaris</button>
              </a>
        @endif
        
            
        </div>
  @stop            
    
               
        
       