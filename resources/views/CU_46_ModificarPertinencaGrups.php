
<div class="modal fade" id="miModalModPerGrups" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerUser" class="modal-content">
            <div class="text-center darkColor">
                Grups usuari
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formModPerGrups" name="formModPerGrups" class="form-horizontal" method="POST" action="{{ url('/modPerGrups') }}">
                <div class="altaBaixa">

                    {{ csrf_field() }}
                    <div>
                        <input type="text" name="cu46_idUsuari" id="cu46_idUsuari" value=""/>
                    </div>
                    <div>
                        <!--<label class="col-sm-5">Nom Usuari: </label>
                        <label id="cu47_nomUsuari" class="col-sm-7"></label>-->
                        <label class="radio-inline">
                            <input type="radio" id="cu46_radio" name="cu46_radio" value="" />
                        </label>
                    </div>

                </div>

                <div class="text-right darkColor">
                    <button id="buttonModPerGrups" class="btn btn-primary" type="submit">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>



