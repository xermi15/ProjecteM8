@extends('layouts.master')
@section('content')
<div class="container">
  <h2>Editar Plantilla Workflow</h2>
  <div class="panel-body" style="padding:30px">
      {{-- TODO: Abrir el formulario e indicar el método POST --}}

          <form action="{{url('/CU_27_EditarPlantilla/'.$id  )}}" method="POST">
              {{method_field('POST')}}


              {{-- TODO: Protección contra CSRF --}}
              {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Nombre</label>
                        <input type="text" name="nomPlantilla" id="nomPlantilla" value="{{$plantillas->nomPlantilla}}">
                    </div>
<label for="Aprovador">Aprovador/es</label>
                    <div class="form-group">
                        
                        
                         @foreach($userAprov as $user)
                        @if ($plantillas->idUsuariAprovador == $user->idUsuari)
                        <input type="text" name="aprov" id="aprov" value="{{ $user->nomUsuari }}">
                        @endif
                        @endforeach

                        <select class="form-control col-sm-10" name="aprov">
                             @foreach($userAprov as $user)
                               
                            <option value="{{ $user->idUsuari }}"> {{ $user->nomUsuari }}</option>
                            @endforeach  
                        </select>
                        
                    </div>
<label for="Aprovador">Aprovador actual</label>

               <div class="form-group">                      
                       @foreach($usersRev as $revi) 
                        @foreach($userAprov as $user)
                        @if ($plantillas->idPlantilla == $revi->idPlantilla)
                            @if($revi->idUsuariRevisor == $user->idUsuari)
                            <input type="text" name="revi" id="revi" value="{{ $user->nomUsuari }}"><br><label for="re">Revisor</label>
                        @endif
                        @endif
                        @endforeach           
                        @endforeach
                    
                        <select class="form-control col-sm-10" multiple size="3" name="revi[]">
                            @foreach($userAprov as $user)
                               
                                <option value="{{ $user->idUsuari }}">{{ $user->nomUsuari}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Guardar Plantilla
                        </button>
                    </div>
  
                </form>

            </div>
</div>

@stop