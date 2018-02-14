<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="container" style="padding: 30px;">
    <div class="row">
          <div class="form-group">
              <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align: center;">Gestionar grupos</th> 
                </tr>
            </thead>
        </table>
              
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" style="border-color: black;"><b>Crear grupo</b></button>
        </div>
       
          <table style="text-align: center;" class="table table-condensed table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align: center;">Nombre</th>
                  <th style="text-align: center;">Miembros</th>
                  <th style="text-align: center;">Opciones</th>  
 
                </tr>
            </thead>
            <tbody>
                @foreach( $arrayGrupos as $key => $grupo )
                <tr>
                    <td>{{$grupo['nombre']}}</td>
                    <td>{{$grupo['miembros']}}</td>
                    <td>
                        <a class="glyphicon glyphicon-pencil" href="" ></a> 
                        <a class="glyphicon glyphicon-trash" href="" ></a>
                        <a class="glyphicon glyphicon-circle-arrow-right" href="" ></a>
                    </td>
                </tr>
                
            </tbody>
            @endforeach
        </table>
 </div>
</div>
