<!--    CU40_CrearGrupo   -->



@extends("master")<!-- poner archivo plantilla correcta CU40_GestionarGrupos -->

@section('title', 'Crear Grupo')

@section("content")
<!--    background-color:#455A64    -->

<div class="container" style="border: 2px solid black; border-radius: 10px;">
    <div class="title" style="background:#455A64; width: 100%;">
        <h3 class="panel-title text-center">
            <span aria-hidden="true"></span>
            Crear Grupo
	</h3>
    </div>
    <table>
        <tr>
            <label for="nom_grup">Nombre</label>
            <input type="text" name="nom_grup" id="nom_grup" class="form-control">
        </tr>
        <tr>
            <label for="usuaris_grups">Selecciona Usuarios</label>
            <input type="file" name="usuaris_grups" id="usuaris_grups" class="form-control">
        </tr>
        
        
    </table>
    <div class="opciones" style="background:#455A64;">
        <div class="boton_aceptar" style="">
            <h3 class="panel-title text-center">
                <span aria-hidden="true"></span>
                Aceptar
            </h3>
        </div>
        <div class="boton_cancelar" style="width: 150%;">
            <h3 class="panel-title text-center">
                <span aria-hidden="true"></span>
                Cancelar
            </h3>
        </div>
    </div>
</div>


<!--
<div class="row" style="margin-top:20px  "> 

    <div class="col-md-offset-3 col-md-6">

	<div class="panel panel-default">
            <div class="panel-heading">
		<h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                    Crear Grupo
		</h3>
            </div>

            <div class="panel-body" style="padding:30px">

                <form action="#" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="nom_grup">Nombre</label>
                        <input type="text" name="nom_grup" id="nom_grup" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="usuaris_grups">Selecciona Usuarios</label>
                        <input type="file" name="usuaris_grups" id="usuaris_grups" class="form-control">
                    </div>


		</form>

            </div>
	</div>
    </div>
</div>
-->

@stop
