
<button id="editBtn" type="button" class="btn" onclick="nouGrup();" data-toggle="modal" data-target="#myModal" style="margin-bottom: 30px; width: 25%; border: solid #000000 2px;">
    Crear grup
</button>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center; background: #455A64; color: white; border-radius: 5px 5px 0px 0px;">
                <h4 class="modal-title" style="text-align: center; display:inline; cursor:default;">Crear grup</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:inline;">
                    <a aria-hidden="true" style="font-size: 30px;">&times;</a>
                </button>
            </div>
            <div class="modal-body">
                <div style="width: 25%;">
                    <label for="nombre_grupo" class="ui-hidden-accessible">Nom: </label>
                    <input type="text" name="nombre_grupo" id="nombre_grupo" placeholder="Nom del grup">
                </div>
                @include('CU_39_ModificarMembres')

            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" onclick="guardar();"class="btn btn-success" id="modalGuardar" style="margin-right: 25%;">Crear</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

<script>
    var idGrupo;
    function guardar() {
        //guarda datos grupo
        alert(idGrupo);
    }

    function nouGrup() {
        //coge id de pelicula seleccionada
        idGrupo = '';
    }
</script>