<div data-role="main" class="ui-content">
    <a href="#myPopup3" data-rel="popup" class="glyphicon glyphicon-trash"></a>
    
    <div data-role="popup" id="myPopup3" class="ui-content" style="position:fixed; top:50%; left:50%; width:30em; min-height:19em; margin-top:-9em; margin-left:-15em; border: 1px solid #ccc; background-color: #f3f3f3;">
        <form method="post" action="/action_page_post.php">
            <div>
                <div class="form-group">
                    <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: center;">Eliminar grup</th> 
                        </tr>
                        </thead>
                    </table>
                </div>
                <div style="text-align: center;">
                    <h5>Segur que desitja eliminar aquest grup?</h5>
                    
                    <label for="password">Contrasenya:</label>
                    <input type="password" name="password" id="password" placeholder="Introdueixi la seva contrasenya">
                </div>

                <div>
                    <div style="width: 50%; display: flex; justify-content: center; float: left;">
                        <input type="submit" data-inline="true" value="Acceptar">
                    </div>
                    <div style="width: 50%; display: flex; justify-content: center; float: right;">
                        <input type="submit" data-inline="true" value="Cancelar">
                    </div>
                </div>    
            </div>
        </form>
    </div>
</div>
