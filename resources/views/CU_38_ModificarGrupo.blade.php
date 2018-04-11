<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<button id="editBtn" type="button" onclick="idGrup({{$grup->idGrup}});" data-toggle="modal" data-target="#myModal">
    <i class="glyphicon glyphicon-pencil"></i> 
</button>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: center">Modificar grup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Nom</h4>
                <label for="nombre_grupo" class="ui-hidden-accessible"></label>
                <input type="text" name="nombre_grupo" id="nombre_grupo" placeholder="Nom del grup" value="{{ $grup->nom }}" readonly > <!--readonly or disabled-->
                @include('CU_39_ModificarMembres')
                
            </div>
            <div class="modal-footer">
                <button type="button" onclick="guardar();"class="btn btn-success" id="modalGuardar">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
</div>

<script>
    var idGrupo;
    function guardar(){
    //guarda datos grupo
    
    }

    function idGrup(id){
    //coge id de pelicula seleccionada
    idGrupo = id;
    }
</script>
