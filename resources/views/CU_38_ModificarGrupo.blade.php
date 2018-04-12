<button id="editBtn" type="button" onclick="idGrup({{$grup->idGrup}});" data-toggle="modal" data-target="#myModal_2" style="padding: 0; border: none; background: none;">
    <i class="glyphicon glyphicon-pencil"></i> 
</button>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal_2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center; background: #455A64; color: white; border-radius: 5px 5px 0px 0px;">
                <h4 class="modal-title" style="text-align: center; display:inline; cursor:default;">Modificar grup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:inline;">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: center;">
                <h4>Nom</h4>
                <label for="nombre_grupo" class="ui-hidden-accessible"></label>
                <input type="text" name="nombre_grupo" id="nombre_grupo" placeholder="Nom del grup" value="{{ $grup->nom }}" disabled >
                @include('CU_39_ModificarMembres')
                
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" onclick="guardar();"class="btn btn-success" id="modalGuardar" style="margin-right: 25%;">Guardar</button>
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
