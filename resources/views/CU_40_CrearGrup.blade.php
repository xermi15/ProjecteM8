<button id="editBtn" type="button" class="btn" data-toggle="modal" data-target="#myModal" style="margin-bottom: 30px; width: 25%; border: solid #000000 2px;">
    Crear grup
</button>
<form id="formNewUser" name="formNewUser" class="form-horizontal" method="POST" action="{{ url('/newGrup') }}">
    <div class="controls">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
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
                        <label for="nombre_grupo">Nom: </label>
                        <input type="text" name="cu_40nomGrup" id="cu_40nomGrup" class="form-control" placeholder="Nom del grup" value="" required>

                        @include('CU_39_ModificarMembres')

                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <button type="submit" class="btn btn-success" id="modalGuardar" style="margin-right: 25%;">Crear</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>