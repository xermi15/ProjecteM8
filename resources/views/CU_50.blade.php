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
                    <th>ID UsuariRevisor</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($plantilla as $plantillas)
                    <tr>
                        <td>{{ $plantillas->idPlantilla }}</td>
                        <td>{{ $plantillas->nomPlantilla }}</td>
                        <td>{{ $plantillas->idUsuariCreador }} </td>
                        <td>{{ $plantillas->idUsuariAprovador }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>
</div>
@stop
