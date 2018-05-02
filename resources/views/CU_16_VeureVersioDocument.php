    <div data-role="main" class="ui-content">
    <a href="#myPopup3" data-rel="popup" class="glyphicon glyphicon-trash"></a>
    
    <div data-role="popup" id="myPopup3" class="ui-content" style="position:fixed; top:50%; left:50%; width:30em; min-height:19em; margin-top:-9em; margin-left:-15em; border: 1px solid #ccc; background-color: #f3f3f3;">
        <form method="post" action="/action_page_post.php">
            <div>
                <div class="form-group">
                    <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: center;">Versiones del documento</th> 
                        </tr>
                        </thead>
                    </table>
                </div>
                <div>
                    <h5>Documento:</h5>
                    <input type="documento" name="documento" id="documento" placeholder=""> 
                </div>

                <div class="table-responsive">
                <table border="1">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Versión</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($logs as $log)
                      <tr>
                        <td>{{ $log->nomdocument }}</td>
                        <td>{{ $log->versio }}</td>

                      </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
                    <div style="width: 50%; display: flex; justify-content: center; float: left;">
                        <input type="submit" data-inline="true" value="Aceptar">
                    </div>
                    <div style="width: 50%; display: flex; justify-content: center; float: right;">
                        <input type="submit" data-inline="true" value="Cancelar">
                    </div>
                </div>    
            </div>
        </form>
    </div>

