<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


<!--------------------         FALTA INCLUIR CU_41 - MOSTRAR GRUPOS   --------------------------->



@extends('layouts.master')

@section('content')
<div class="container" style="padding: 30px;">
    <div class="row">
        <div class="form-group">
            <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th style="text-align: center;">Mostrar Usuaris</th> 
                </tr>
                </thead>
            </table>
              
        </div>
       
          <table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nom de Usuari</th>
				<th>Nom</th>
				<th>Cognoms</th>
			</tr>
		</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->idUsuari }}</td>
						<td>{{ $user->nomUsuari }}</td>
						<td>{{ $user->nom }}</td>
						<td>{{ $user->cognoms }}</td>
						</td>
					</tr>
				@endforeach

			</tbody>

	</table>
    </div>
</div>
@stop
