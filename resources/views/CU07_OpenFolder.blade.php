@extends('layouts.master')

@section('content')
        <table class="table">
            <tr>
                <td class="col-md-6"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearCarpetaModal" data-book-id="{{$title}}"><span class="glyphicon glyphicon-plus"></span><p style="display:inline; margin-left: 5px">Crear Carpeta</p></button></td>
                <td class="col-md-6"><span class="glyphicon glyphicon-circle-arrow-up"></span>Pujar Document</td>
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
                <td class="col-md-1"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificarModal" data-book-id="{{$carpeta->idCarpeta." carpeta"}}" data-book-ultimamod="{{$carpeta->dataModificacio}}" data-book-nombre="{{$carpeta->nom}}" data-book-descripcion="{{$carpeta->descripcio}}"><span class="glyphicon glyphicon-wrench"></button></td>
                <td class="col-md-1"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moureCarpetaModal" data-book-id="{{$carpeta->idCarpeta}}" data-book-name="{{$totesCarpetes}}"><span class="glyphicon glyphicon-new-window"></button></td>
                <td class="col-md-1"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#borrarModal" data-book-id="{{$carpeta->idCarpeta." carpeta"}}" data-book-name="{{$carpeta->nom}}"><span class="glyphicon glyphicon-trash"></button></td>
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
                <td class="col-md-1"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#borrarModal" data-book-id="{{$document->idDocument." documento"}}" data-book-name="{{$document->nom}}"><span class="glyphicon glyphicon-trash"></button></td>
            </tr>
            @endforeach
        </table>

        <!-- Modal Eliminar-->
        <div class="modal fade" id="borrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Eliminar</h4>
              </div>
              <div class="modal-body">
                  Seguro que desea eliminar <b><p id="bookId" style="display: inline-block"></p></b>?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="modalForm" action="" method="POST" style="display:inline">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary btn-danger">Eliminar</button>
                </form>                
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal Crear-->
        <form id="modalFormCrear" action="" method="POST" style="display:inline">
            <div class="modal fade" id="crearCarpetaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Crear Carpeta</h4>
                  </div>
                  <div class="modal-body">
                      <h4>Nom:<h4><input type="text" name="nomCarpeta" id="nomCarpeta" class="form-control">
                      <h4>Descripció:<h4><textarea name="descripcioCarpeta" id="descripcioCarpeta" class="form-control"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary btn-success">Crear</button>

                  </div>
                </div>
              </div>
            </div>
        </form>
        
        <!-- Modal Modificar-->
        <form id="modalFormModificar" action="" method="POST" style="display:inline">
            <div class="modal fade" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Eliminar</h4>
                  </div>
                  <div class="modal-body">
                      <b>Nombre: </b></br>
                      <input id="nombreInput" name="nombreInput" type="text" class="form-control"> </br>
                      <b>Descripció: </b></br>
                      <textarea id="descripcionInput" name="descripcioInput" class="form-control" rows="4"></textarea></br>
                      <b>Propietari: </b></br>
                      <p id="propietari">Ningú</p>
                      <b>Modificat per: </b></br>
                      <p id="modificatPer">Ningú</p>
                      <b>Ultima modificacio: </b></br>
                      <p id="ultimaModificacio">No s'ha modificat</p>
                  </div>
                  <div class="modal-footer" style="text-align: center">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary btn-success">Guardar</button>
                  </div>
                </div>
              </div>    
            </div>
        </form>
        
        <!-- Modal Moure-->
        <form id="modalFormMoure" action="" method="POST" style="display:inline">
            <div class="modal fade" id="moureCarpetaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Crear Carpeta</h4>
                  </div>
                  <div class="modal-body">
                      <h4>Carpetes:</h4>
                      <div id="listaCarpeta"></div>
                      <b>Nom de la carpeta destinatari: </b><input id="nombreMovCarpeta" name="nombreMovCarpeta" type="text" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary btn-success">Crear</button>

                  </div>
                </div>
              </div>
            </div>
        </form>
        
        <script>
            $('#borrarModal').on('show.bs.modal', function(e) {
                var bookId = $(e.relatedTarget).data('book-id');
                var id = bookId.split(" ");
                var bookName = $(e.relatedTarget).data('book-name');
                $('#bookId').text(bookName);
                if(id[1] == "carpeta"){
                    $('#modalForm').attr('action', '../borrarCarpeta/'+id[0]);
                }else{
                    $('#modalForm').attr('action', '../borrarDocumento/'+id[0]);
                }
                
            });
            
            $('#crearCarpetaModal').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('book-id');
                $('#modalFormCrear').attr('action', '../crearCarpeta/'+id);
            });
            
            $('#modificarModal').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('book-id');
                var nombre = $(e.relatedTarget).data('book-nombre');
                var descripcion = $(e.relatedTarget).data('book-descripcion');
                var ultimaModificacio = $(e.relatedTarget).data('book-ultimamod');
                /*var propietari=$('#propietari').text();
                var modificatPer=$('#modificatPer').text();*/
                $('#nombreInput').val(nombre);
                $('#descripcionInput').val(descripcion);
                $('#ultimaModificacio').text(ultimaModificacio);
                
                $('#modalFormModificar').attr('action', '../modificarCarpeta/'+id);
            });
            
            $('#moureCarpetaModal').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('book-id');
                var html = $(e.relatedTarget).data('book-name');
                $('#listaCarpeta').text("");
                $('#listaCarpeta').append(html);
                
                $('#modalFormMoure').attr('action', '../moureCarpeta/'+id);
            });
            
        </script>
@stop
