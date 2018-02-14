<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestionar Usuaris</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap and my style-->
        <link href="{{ url('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/CU_52.css') }}" rel="stylesheet">

    </head>
    <body>


        <div id="formNewUser">
            <div class="darkColor">Crear nuevo usuario</div>
            <div>
                <input type="text" name="" id="" placeholder="Nombre">
                <input type="text" name="" id="" placeholder="Apellidos">
                <input type="text" name="" id="" placeholder="Contraseña">
                <input type="text" name="" id="" placeholder="Email">
            </div>
            <div class="darkColor">
                <button>Crear</button>
            </div>
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/js/m14.js') }}"></script>
    </body>
</html>
