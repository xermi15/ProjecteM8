@extends('layouts.master')
@section('content')
<div class="container">
  <h2>Mostrar Plantilla Workflow</h2>
  <table class="table">
            <thead>
                <tr>
                    <th>ID Plantilla</th>
                    <th>Nom Plantilla</th>
                    <th>ID UsuariCreador</th>
                    <th>ID UsuariAprovador</th>
                    <th>Opcions</th>
                </tr>
            </thead>
            <tbody>
                
                
                @foreach($plantilla as $plantillas)
                    <tr>
                        <td>{{ $plantillas->idPlantilla }}</td>
                        <td>{{ $plantillas->nomPlantilla }}</td>
                        <td>{{ $plantillas->idUsuariCreador }} </td>
                        <td>{{ $plantillas->idUsuariAprovador }}</td>
                        <td><a href="{{url('CU_27_EditarPlantilla' )}}" class="btn btn-warning btn-lg active" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar Pelicula</a>
            
            <a href="{{url('CU_28_EliminarPlantilla' )}}" class="btn btn-danger btn-lg active" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Eliminar Pelicula</a>
            </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
</div>
@stop
