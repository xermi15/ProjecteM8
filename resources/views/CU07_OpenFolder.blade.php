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

        <!-- Modal -->
        <div class="modal fade" id="borrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Eliminar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
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
            
            
        </script>
@stop
