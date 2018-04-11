@extends('layouts.master')

@section('content')
@notification()
        <table class="table">
            <tr>
                <td class="col-md-6"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearCarpetaModal" data-book-id="{{$title}}"><span class="glyphicon glyphicon-plus"></span><p style="display:inline; margin-left: 5px">Crear Carpeta</p></button></td>
                <td class="col-md-6">
                    <a data-toggle="modal" data-target="#modalPujarArxiu">
                        <span class="glyphicon glyphicon-circle-arrow-up"></span>
                        Pujar Document
                    </a>
                </td>
                <!--  type="button" class="btn btn-info btn-lg" modalPujarArxiu-->
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
                <td class="col-md-1"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gestionarPermisosModal" data-book-id="{{$carpeta->idCarpeta}}" data-book-nombre="{{$carpeta->nom}}"><span class="glyphicon glyphicon-lock"></button></td>
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
                <td class="col-md-1"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moureDocumentModal" data-book-id="{{$document->idDocument}}" data-book-name="{{$totesCarpetes}}"><span class="glyphicon glyphicon-new-window"></button></td>
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
                    <h4 class="modal-title" id="exampleModalLabel">Modificar Carpeta</h4>
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
                    <h4 class="modal-title" id="exampleModalLabel">Moure Carpeta</h4>
                  </div>
                  <div class="modal-body">
                      <h4>Carpetes:</h4>
                      <div id="listaCarpeta"></div>
                      <b>Nom de la carpeta destinatari: </b><input id="nombreMovCarpeta" name="nombreMovCarpeta" type="text" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary btn-info">Mover</button>

                  </div>
                </div>
              </div>
            </div>
        </form>
        
        <form id="modalFormMoureDocument" action="" method="POST" style="display:inline">
            <div class="modal fade" id="moureDocumentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Moure Document</h4>
                  </div>
                  <div class="modal-body">
                      <h4>Carpetes:</h4>
                      <div id="listaCarpetaD"></div>
                      <b>Nom de la carpeta destinatari: </b><input id="nombreMovCarpeta" name="nombreMovCarpeta" type="text" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary btn-info">Mover</button>

                  </div>
                </div>
              </div>
            </div>
        </form>
        
        <!-- Modal Gestionar Permisos-->
        <div class="modal fade" id="gestionarPermisosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" style="width:730px;">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Permisos de la carpeta <b><p id="carpetaPermisosTexto" style="display: inline-block"></p></b></h3>
              </div>
              <div class="modal-body">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#cu">Cambiar usuari </a></li>
                      <li><a data-toggle="tab" href="#au">Afegir Usuari</a></li>
                      <li><a data-toggle="tab" href="#bu">Borrar usuari</a></li>
                      <li><a data-toggle="tab" href="#cg">Cambiar grup </a></li>
                      <li><a data-toggle="tab" href="#ag">Afegir grup</a></li>
                      <li><a data-toggle="tab" href="#bg">Borrar grup</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="cu" class="tab-pane fade in active">
                        <h3>Cambiar permís d'un usuari</h3>
                            <div class="form-group">
                          <label>Usuaris: </label>
                          <select class="form-control" id="listaUsuariosCambiar" style="min-width:120px;"></select>
                        </div>
                        <div class="form-group">
                          <label>Selecciona un permís: </label>
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="s"> Super 
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="w"> Escritura 
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="r"> Lectura 
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="-"> Cap permís 
                        </div>
                        <div style="text-align: right">
                            <form id="formcambiarPermisUsuari" action="" method="POST" style="display:inline">
                            {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary btn-success">Cambiar</button>
                            </form> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                      <div id="au" class="tab-pane fade">
                        <h3>Afegir nou usuari</h3>
                        <div class="form-group">
                            <label>Afegir permís Usuari: </label>
                            <select class="form-control" id="listaUsuarios" style="min-width:120px;"></select>
                        </div>
                            <div class="form-group">
                                <label>Selecciona un permís: </label>
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="s"> Super
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="w"> Escritura
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="r"> Lectura
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="-"> Cap permís
                            </div>
                            <div style="text-align: right">
                            <form id="formafegirPermisUsuari" action="" method="POST" style="display:inline">
                            {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary btn-success">Afegir usuari</button>
                            </form> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                      <div id="bu" class="tab-pane fade">
                        <h3>Borrar permís d'un usuari</h3>
                        <div class="form-group">
                            <label>Borrar permís Usuari: </label>
                            <select class="form-control" id="listaUsuarios" style="min-width:120px;"></select>
                        </div>
                        <div style="text-align: right">
                            <form id="formborrarPermisUsuari" action="" method="POST" style="display:inline">
                            {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary btn-success">Borrar permís</button>
                            </form> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                      <div id="cg" class="tab-pane fade">
                        <h3>Cambiar permís d'un grup</h3>
                            <div class="form-group">
                          <label>Grups: </label>
                          <select class="form-control" id="listaUsuarios" style="min-width:120px;"></select>
                        </div>
                        <div class="form-group">
                          <label>Selecciona un permís: </label>
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="s"> Super 
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="w"> Escritura 
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="r"> Lectura 
                          <input class="form-check-input" type="radio" name="permisosUsuarios" value="-"> Cap permís 
                        </div>
                        <div style="text-align: right">
                            <form id="formcambiarPermisGrup" action="" method="POST" style="display:inline">
                            {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary btn-success">Cambiar</button>
                            </form> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                      <div id="ag" class="tab-pane fade">
                        <h3>Afegir nou grup</h3>
                        <div class="form-group">
                            <label>Afegir permís grup: </label>
                            <select class="form-control" id="listaUsuarios" style="min-width:120px;"></select>
                        </div>
                            <div class="form-group">
                                <label>Selecciona un permís: </label>
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="s"> Super
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="w"> Escritura
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="r"> Lectura
                                <input class="form-check-input" type="radio" name="permisosUsuarios" value="-"> Cap permís
                            </div>
                            <div style="text-align: right">
                                <form id="formafegirPermisGrup" action="" method="POST" style="display:inline">
                                {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary btn-success">Afegir grup</button>
                                </form> 
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                      </div>
                      <div id="bg" class="tab-pane fade">
                        <h3>Borrar permís d'un grup</h3>
                        <div class="form-group">
                            <label>Borrar permís grup: </label>
                            <select class="form-control" id="listaUsuarios" style="min-width:120px;"></select>
                        </div>
                        <div style="text-align: right">
                            <form id="formborrarPermisGrup" action="" method="POST" style="display:inline">
                            {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary btn-success">Borrar permís</button>
                            </form> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>      
              </div>
            </div>
          </div>
        </div>
        <!-- Pujar document -->
        <div id="modalPujarArxiu" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div>
                            <h3 class="panel-title text-center">
                                <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                Pujar document
                            </h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data" action="{{action('CU_08Controller@postPujarDoc',$title)}}">
                        {{ csrf_field() }}
                            <div class="" > <!--panel-body style="padding:20px"-->
                                <div class="form-group">
                                    <label for="title">Nom del arxiu</label>
                                    <input type="text" name="nom" id="nom" class="form-control" required>
                                </div>

                                <div class="form-group">
                                        <label for="title">Ruta de l'arxiu</label>
                                        <input type="file" name="arxiu" id="arxiu" class="form-control" required>
                                </div>

                                <div class="form-group">
                                        <label for="synopsis">Descripció (Opcional)</label>
                                <textarea name="desc" id="desc" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary" > <!-- style="padding:8px 100px;margin-top:25px;" form-group  -->
                                            Pujar arxiu 
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#gestionarPermisosModal').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('book-id');
                var nombre = $(e.relatedTarget).data('book-nombre');
                $('#carpetaPermisosTexto').text(nombre);
                //establecemos las rutas de los forms
                $('#formcambiarPermisUsuari').attr('action', '../cambiarPermisUsuari/'+id);
                $('#formafegirPermisUsuari').attr('action', '../afegirPermisUsuari/'+id);
                $('#formborrarPermisUsuari').attr('action', '../borrarPermisUsuari/'+id);
                $('#formformcambiarPermisGrup').attr('action', '../cambiarPermisGrup/'+id);
                $('#formafegirPermisGrup').attr('action', '../afegirPermisGrup/'+id);
                $('#formborrarPermisGrup').attr('action', '../borrarPermisGrup/'+id);
                //hacemos una consulta al servidor para rellenar los datos de los formularios
                $.get('../getDatos/'+id, function(response) {
                    $("#listaUsuariosCambiar").append(response["cambiarUsuari"]);
                })
            });
            
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
            
            $('#moureDocumentModal').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('book-id');
                var html = $(e.relatedTarget).data('book-name');
                $('#listaCarpetaD').text("");
                $('#listaCarpetaD').append(html);
                
                $('#modalFormMoureDocument').attr('action', '../moureDocument/'+id);
            });
            
        </script>
@stop
