@extends('layouts.master')
@section('content')
<div class="container">
  <h2>Crear Plantilla Workflow</h2>
  <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Nombre">Nombre:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="Nombre" placeholder="Introduce descripcion" name="email">
      </div>
    </div>
    
      <div class="form-group">
          <label class="control-label col-sm-2" for="title">Revisor/es</label>
          <div class="col-sm-10">
          <!--<input type="file" name="revisor" id="revisor" class="form-control" required>-->
                <select class="form-control col-sm-10">
                        <option selected></option>
                        <option>Jorge</option>
                        <option>Issam</option>
                        <option>Fede</option>
                        <option>Esther</option>
                </select>
          </div>
      </div>
     
     
      <!-- Al hacer click encima a seleccionar tiene que mostrar los aprovadores -->
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
       
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" name="MostrarPlantilla" class="btn btn-default">Crear Plantilla</button>
      </div>
    </div>
       
 </form>

@stop