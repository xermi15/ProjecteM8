@extends('layouts.CU_02')
@section('content')
<div class="container">
  <h2>Mostrar Plantilla Workflow</h2>
  <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Nombre">Nombre:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="Nombre" placeholder="Enter email" name="email">
      </div>
    </div>
      <div class="form-group">
          <label class="control-label col-sm-2" for="title">Documento</label>
          <div class="col-sm-10">
          <input type="file" name="documento" id="arxiu" class="form-control" required>
          </div>
      </div>
       <!-- <php /*
        Al hacer click encima a seleccionar tiene que mostrar los revisores
      $sentencia="select * from Revisors order by nomRevisor asc";
      $query = mysql_query($sentencia);
      
         ?>
      <select name="revisors" size="0">
      <php
         while ($arreglo= mysql_fetch_array()){ ?>
      <option value="<php echo $arreglo['id_revisor']?>"><php echo $arreglo['nomRevisor']?></option>
         <php}?>
      </select>
         */
     -->
 
      <div class="form-group">
          <label class="control-label col-sm-2" for="title">Revisor/es</label>
          <div class="col-sm-10">
          <input type="file" name="revisor" id="revisor" class="form-control" required>
          </div>
      </div>
      <!-- Al hacer click encima a seleccionar tiene que mostrar los aprovadores -->
      <div class="form-group">
          <label class="control-label col-sm-2" for="title">Aprovador/es</label>
          <div class="col-sm-10">
          <input type="file" name="daprovador" id="aprovador" class="form-control" required>
          </div>
      </div>
      <div class="form-group">
	<select class="form-control col-sm-10">
      <option>Guardar Plantilla</option>
      <option>Crear Workflow</option>
      <option>Crear Workflow y Guardar Plantilla</option>
        </select></div>
          
      <br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" name="MostrarPlantilla" class="btn btn-default">Mostrar Plantilla</button>
      </div>
        <!-- Mostrar tabla con nombre, documento, aprovadores y revisores-->
        <br>
     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" name="OcultarPlantilla" class="btn btn-default">Ocultar Plantilla</button>
      </div>
         <br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
@stop