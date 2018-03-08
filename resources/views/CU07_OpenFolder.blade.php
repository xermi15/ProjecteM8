@extends('layouts.master')

@section('content')
        <table class="table">
            <tr>
                <td class="col-md-6"><span class="glyphicon glyphicon-plus"></span>Crear Carpeta</td>
                <td class="col-md-6"><span class="glyphicon glyphicon-circle-arrow-up"></span>Subir Documento</td>
            </tr>
            <tr>
                <td class="col-md-6">
                    <select class="form-control">
                        <option>Acció en masa</option>
                    </select>
                </td>
                <td class="col-md-6">
                    <select class="form-control">
                        <option>Ordena per</option>
                    </select>
                </td>
            </tr>       
        </table>

        
        <table class="table">
            @foreach( $carpetes as $key => $carpeta)
            <tr>
                <td class="col-md-1"><input type="checkbox" class="form-check-input"></td>
                <td class="col-md-1"><a href="{{url('/abrirCarpeta/'.$carpeta->idCarpeta)}}"><span class="glyphicon glyphicon-folder-open"></span></a></td>
                <td class="col-md-3"><a href="{{url('/abrirCarpeta/'.$carpeta->idCarpeta)}}"><b>{{$carpeta->nom}}</b><br>{{$carpeta->dataModificacio}}</a></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-info-sign"></span></td>
                <td class="col-md-1"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-cloud-download"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-lock"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-wrench"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-new-window"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-trash"></td>
            </tr>
            @endforeach
            @foreach( $arxius as $key => $document)
            <tr>
                <td class="col-md-1"><input type="checkbox" class="form-check-input"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-file"></span></td>
                <td class="col-md-3"><b>{{$document->nom}}</b><br>{{$document->dataModificacio}}</td>
                <td class="col-md-1"><span class="glyphicon glyphicon-info-sign"></span></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-link"></span></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-cloud-download"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-paperclip"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-list-alt"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-new-window"></td>
                <td class="col-md-1"><span class="glyphicon glyphicon-trash"></td>
            </tr>
            @endforeach
        </table>
@stop
