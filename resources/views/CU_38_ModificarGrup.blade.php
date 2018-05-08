<button id="editBtn" type="button" onclick="idGrup({{$grup->idGrup}});" data-toggle="modal" data-target="#myModal_2" style="padding: 0; border: none; background: none;">
    <i class="glyphicon glyphicon-pencil"></i> 
</button>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal_2">
    <div class="modal-dialog" role="document">
        <div id="containerUser" class="modal-content">
           <div class="modal-header" style="text-align: center; background: #455A64; color: white; border-radius: 5px 5px 0px 0px;">
                <h4 class="modal-title" style="text-align: center; display:inline; cursor:default;">Eliminar usuari del grup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:inline;">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <br>
            
            <form id="formEditUser" name="formEditUser" class="form-horizontal" method="POST" action="{{ url('/editGrup') }}">
                <div class="controls">
                    {{ csrf_field() }}
                   
                     <div class="form-group">
                         
                        <label for="nom" class="col-sm-3 control-label">ID:</label>
                        <div class="col-sm-9">
                            
                            <input type="text" name="cu38_idusuari" id="cu38_idusuari" class="form-control" placeholder="Escriu el ID d'usuari que vol eliminar" value="" required />
                            <div>
                   
                        <table  class="table">
                        <thead >
			<tr>
				<th>ID</th>
				<th>Nom</th>
			</tr>
                        </thead>
			<tbody >
				@foreach( $usuaris as $usuari )
					<tr>
						<td>{{$usuari->idUsuari}}</td>
						<td>{{$usuari->nomUsuari}}</td>
						
					</tr>
				@endforeach

			</tbody>
                        </table>
                        </div>
                        </div>
                    </div>
                    
          
                </div>

                <div class="text-right darkColor">
                    <div class="text-right darkColor">
                    <button id="modificar" class="btn btn-danger" type="submit" style="margin-right: 25%;">Eliminar</button>
                </div>
                </div>
            </form>
        </div>
                    

    </div>


</div>