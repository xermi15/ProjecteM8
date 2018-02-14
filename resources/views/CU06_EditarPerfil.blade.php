<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            
        </style>
    </head>
    <body>{{$id =1}}
        <div class="container">
            <h2>Editar Perfil</h2>
        <form action="/DAW2M14/public/editarPerfil/edit/{{$id}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="nomUsuari">Nom usuari:</label>
              <input type="text" class="form-control" name="nomUsuari" id="nomUsuari" value="{{$usuari->nomUsuari}}">
            </div>
            <div class="form-group">
              <label for="contrasenya">Nova contrasenya:</label>
              <input type="password" class="form-control" name="contrasenya" id="contrasenya" placeholder="(Opcional)">
            </div>
            <div class="form-group">
              <label for="cognoms">Cognoms:</label>
              <input type="text" class="form-control" name="cognoms" id="cognoms" value="{{$usuari->cognoms}}">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" id="email" value="{{$usuari->email}}">
            </div>
            <div class="form-group">
              <label for="dadesPostals">Dades postals:</label>
              <input type="text" class="form-control" name="dadesPostals" id="dadesPostals" value="{{$usuari->dadesPostals}}">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
    </body>
</html>
