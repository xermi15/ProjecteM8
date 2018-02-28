@extends('layouts.CU_02')

@section('content')
<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
					Subir documento
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				<form method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Nombre del archivo</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>

                                    <div class="form-group">
                                            {{-- TODO: Completa el input para el poster --}}
                                            <label for="title">Ruta</label>
                                            <input type="file" name="poster" id="poster" class="form-control">
                                    </div>

                                    <div class="form-group">
                                            <label for="synopsis">Descripción</label>
                                    <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                                    Subir archivo 
                                            </button>
                                    </div>

				<form>
			</div>
		</div>
	</div>
</div>
@stop