<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{ url('/css/CU_07.css') }}" rel="stylesheet">

        <title>Carpeta ID</title>

    </head>
    <body>
        
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
            
        
    </body>
</html>
