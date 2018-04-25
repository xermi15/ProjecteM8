@extends('layouts.master')
@section('content')
<div class="container">
  <h2>Mostrar Plantilla Workflow</h2>
  <table class="table">
            <thead>
                <tr> 
                    <th>ID Plantilla</th>
                    <th>Nom Plantilla</th>
                    <th>UsuariCreador</th>
                    <th>UsuariAprovador</th> 
                    <th>UsuariRevisor </th>
                    <th>Opcions</th>
                </tr>
            </thead>
            <tbody>
                
                
                @foreach($plantilla as $plantillas)
                    <tr>
                        <td>{{ $plantillas->idPlantilla }}</td>
                        <td>{{ $plantillas->nomPlantilla }}</td>
                        
                        
                        @foreach($users as $user)
                        @if ($plantillas->idUsuariCreador == $user->idUsuari)
                        <td>{{ $user->nomUsuari }}</td>
                        @endif
                        @endforeach
                        
                        @foreach($users as $user)
                        @if ($plantillas->idUsuariAprovador == $user->idUsuari)
                        <td>{{ $user->nomUsuari }}</td>
                        @endif
                        @endforeach
                        
                        @foreach($plantillarevisors as $revi)
                        
                        @foreach($users as $user)
                        @if ($plantillas->idPlantilla == $revi->idPlantilla)
                            @if($revi->idUsuariRevisor==$user->idUsuari)
                        <td >{{ $user->nomUsuari }}</td>
                        @endif
                        @endif
                        @endforeach
                        @endforeach
                        
                        <td><a href="{{url('CU_27_EditarPlantilla' )}}" class="btn btn-warning btn-lg active" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            
            <a href="{{url('CU_28_EliminarPlantilla' )}}" class="btn btn-danger btn-lg active" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
                    </tr>
                @endforeach
               
            </tbody>

        </table>
</div>
@stop
