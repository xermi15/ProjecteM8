    <div data-role="main" class="ui-content">
    <a href="#myPopup3" data-rel="popup" class="glyphicon glyphicon-trash"></a>
    
    <div data-role="popup" id="myPopup3" class="ui-content" style="position:fixed; top:50%; left:50%; width:30em; min-height:19em; margin-top:-9em; margin-left:-15em; border: 1px solid #ccc; background-color: #f3f3f3;">
        <form method="post" action="/action_page_post.php">
            <div>
                <div class="form-group">
                    <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: center;">Eliminar versió document</th> 
                        </tr>
                        </thead>
                    </table>
                </div>
                <div>
                    <h5 style="text-align: center;">Segur que vol eliminar la versió del document</h5>
                   
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
