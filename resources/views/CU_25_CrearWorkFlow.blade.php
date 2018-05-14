@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

				<div class="container">
  
                                    <h2>Crear Workflow</h2>
                    <div class="panel-body" style="padding:30px">
                                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                                    <form method="POST" action="{{ url('/newWorkflow') }}">


                                        {{-- TODO: Protección contra CSRF --}}

                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="Document">Document</label>
                                            <select class="form-control col-sm-10" name="document">
                                                @foreach($documents as $document)

                                                <option value="{{ $document->idDocument }}"> {{ $document->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                            
                                        <div class="form-group">
                                            {{-- TODO: Completa el input para el año --}}
                                            <label for="Aprovador">Aprovador/es</label>
                                            <select class="form-control col-sm-10" name="aprov">
                                                @foreach($users as $user)

                                                <option value="{{ $user->idUsuari }}"> {{ $user->nomUsuari }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            {{-- TODO: Completa el input para el año --}}
                                            <label for="año">Revisor</label>

                                            <select class="form-control col-sm-10" multiple size="3" name="revi[]">
                                                @foreach($users as $user)

                                                    <option value="{{ $user->idUsuari }}">{{ $user->nomUsuari }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary " style="padding:8px 100px;margin-top:25px;">
                                                Guardar WorkFlow
                                            </button>
                                        </div>
                                        {{-- TODO: Cerrar formulario --}}
                                    </form>

                        </div>
</div>


			
@stop

