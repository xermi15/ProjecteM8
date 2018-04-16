@extends('layouts.master')

@section('content')
@include('CU_52_CrearUsuari')
<link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('/css/CU_42.css') }}" rel="stylesheet">
<link href="{{ url('/css/CU_47.css') }}" rel="stylesheet">
<link href="{{ url('/css/CU_52.css') }}" rel="stylesheet">
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
                <a href="{{ url('/CU_45_ModificarUsuari/' . ($usuaris->idUsuari) ) }}">
                    <button type="button" class="btn btn-default btn-sm btn btn-success">
                        Modificar
                        <span class="glyphicon glyphicon-asterisk"></span>
                    </button>
                </a>
            </label>
            @if( ($usuaris->estat)==1 )
            <label class="butons text-center">
                <button type="button" class="btn btn-default btn-sm btn btn-warning" data-toggle="modal" data-target="#myModal">
                    Baixa
                    <span class="glyphicon glyphicon-minus"></span>
                </button>
            </label>
            @elseif ( ($usuaris->estat)==0 )
            <label class="butons text-center">
                <a href="{{ url('/CU_47_AltaUsuari/' . ($usuaris->idUsuari) ) }}">
                    <button type="button" class="btn btn-default btn-sm btn btn-primary">
                        Alta
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </a>
            </label>
            @endif
            <label class="butons text-center">
                <a href="{{ url('/CU_43_EliminarUsuari/' . ($usuaris->idUsuari) ) }}">
                    <button type="button" class="btn btn-default btn-sm btn btn-danger">
                        Eliminar
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </a>
            </label>
        </div>


        @endforeach


    </div>
</div>


<div class="text-center" id="containerr2">

    <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModalNew">
        <span class="glyphicon glyphicon-plus-sign"></span> Crear Usuari
    </a>

    <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#miModalEdit">
        <span class="glyphicon glyphicon-plus-sign"></span> Modificar Usuari
    </a>
</div>
<!--------------------------Contingut finestra modal CU_44_DonarBaixaUsuari-------------------------->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">

                <div class="text-center" id="containerr2">
                    <div class="text-center darkColor" style="padding: 7px">Donar de baixa</div>


                    {{-- Totes les dades de l`usuari --}}

                    <h5> Nom Usuari: {{$usuaris->nomUsuari}}</h5>
                    <h5> Nom: {{$usuaris->nom}}</h5>
                    <h5> Cognom: {{$usuaris->cognoms}}</h5>
                    <h5> Email: {{$usuaris->email}}</h5>
                    <h5> Dades Postals: {{$usuaris->dadesPostals}}</h5>
                    <h5> Data Alta: {{$usuaris->dataAlta}}</h5>


                    @if( ($usuaris->estat)==1 )
                    <p> <label>Donat de baixa: </label> No<p>

                    <form action="{{action('CU_44Controller@putNo', $usuaris->idUsuari)}}"
                          method="POST" style="display:inline">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-info" style="display:inline">
                            Donar de baixa
                        </button>
                    </form>

                    <a href="{{ url('/CU_42_GestionarUsuaris/') }}">
                        <button type='button' class='btn btn-warning' data-dismiss="modal">Tornar al gestionar usuaris</button>
                    </a>
                    @elseif ( ($usuaris->estat)==0 )
                    <p> <label>Donat de baixa: </label> Si<p>
                    <p><i>Aquest usuari ja estat donat de baixa</i></p>
                    <a href="{{ url('/CU_42_GestionarUsuaris/') }}">
                        <button type='button' class='btn btn-warning' data-dismiss="modal">Tornar al gestionar usuaris</button>
                    </a>
                    @endif


                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>




<script src="{{ url('/js/jquery.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
@stop
