@extends('layouts.master')
@section('content')
<div class="container">
  <h2>Mostrar Plantilla Workflow</h2>
  <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/action_page.php">
    <div class="form-group">
        <label class="control-label col-sm-2" for="Nombre">Nombre:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Nombre" placeholder="Introduce nombre..." name="email">
        </div>
    </div>
              
    <div class="form-group">
          <label class="control-label col-sm-2" for="title">Revisor/es</label>
          <div class="col-sm-10">
          <!--<input type="file" name="revisor" id="revisor" class="form-control" required>-->
                <select class="form-control col-sm-10">
                        <option value="0">Selección:</option>
        <?php
										
          $query = $mysqli -> query ("SELECT * FROM usuaris");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
													
          }
        ?>
                </select>
          </div>
    </div>
      
    <div class="form-group">
          <label class="control-label col-sm-2" for="title">Aprovador</label>
          <div class="col-sm-10">
          <!--<input type="file" name="daprovador" id="aprovador" class="form-control" required>-->
              <select class="form-control col-sm-10">
                        <option selected></option>
                        <option>Fede</option>
                        <option>Esther</option>
              </select>
          </div>
    </div>
    <br>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" name="MostrarPlantilla" class="btn btn-default">Mostrar Plantilla</button>
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" name="OcultarPlantilla" class="btn btn-default">Ocultar Plantilla</button>
        </div>
    </div>
   </form>
</div>
@stop
