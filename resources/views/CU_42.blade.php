@extends('layouts.master')

@section('content')
        <link href="{{ url('/css/CU_42.css') }}" rel="stylesheet">
        <div id="containerr">
            
                <div class="text-center darkColor" style="padding: 7px">Gestionar Usuarios</div>
                <br>  
                
         </div>      
        <div class="text-center" id="containerr2">
            <div style="float: left;" class="   ">
                    
                    <div class="text-center darkColor" style="padding: 7px">Mostrar Usuaris</div>
                   
                    
                    @foreach( $arrayUsuaris as $usuaris )
                    <div>
                        <label class="llista text-center">{{$usuaris->nomUsuari}}</label>
                        <label class="llista2 text-center">{{$usuaris->nom}}</label>
                          <label class="butons text-center">
                            <a href="{{ url('/CU_45/' . ($usuaris->idUsuari) ) }}">
                              <button type="button" class="btn btn-default btn-sm">
                                    M
                                 <span class="glyphicon glyphicon-asterisk"></span>
                              </button>
                            </a>
                        </label>
                        <label class="butons text-center">
                            <a href="{{ url('/CU_44/' . ($usuaris->idUsuari) ) }}">
                               <button type="button" class="btn btn-default btn-sm">
                                   B
                                <span class="glyphicon glyphicon-minus"></span> 
                               </button>
                            </a>
                        </label>
                        <label class="butons text-center">
                            <a href="{{ url('/CU_47/' . ($usuaris->idUsuari) ) }}">
                               <button type="button" class="btn btn-default btn-sm">
                                   A
                                <span class="glyphicon glyphicon-plus"></span> 
                               </button>
                            </a>
                        </label>
                    </div>
                    
                    
                    @endforeach
                    
                    
            </div>
        </div>
         
        
        <div class="text-center" id="containerr2">
            <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus-sign"></span> Crear Usuari
        </a>
        </div>
               
@stop    
       