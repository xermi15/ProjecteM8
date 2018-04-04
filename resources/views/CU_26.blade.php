@extends('layouts.master')
@section('content')
<div class="container">
  <h2>Crear Plantilla Workflow</h2>
 <div class="panel-body" style="padding:30px">
                {{-- TODO: Abrir el formulario e indicar el método POST --}}
                <form method="POST">

                    {{-- TODO: Protección contra CSRF --}}

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Nombre</label>
                        <input type="text" name="nomPlantilla" id="año">
                    </div>

                    <div class="form-group">
                        {{-- TODO: Completa el input para el año --}}
                        <label for="año">Aprovador/es</label>
                        <select class="form-control col-sm-10" multiple size="3" name="aprov">
                            @foreach($users as $user)
                               
                                <option value="{{ $user->idUsuari }}">{{ $user->nomUsuari }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        {{-- TODO: Completa el input para el año --}}
                        <label for="año">Revisor</label>
                        <select class="form-control col-sm-10" name="revi">
                            @foreach($users as $user)
                               
                            <option value="{{ $user->idUsuari }}"> {{ $user->nomUsuari }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Guardar Plantilla
                        </button>
                    </div>

                    {{-- TODO: Cerrar formulario --}}
                </form>

            </div>
</div>

@stop
