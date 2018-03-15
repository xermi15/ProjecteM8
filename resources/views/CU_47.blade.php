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
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/CU_47.css') }}" rel="stylesheet">
       
        

    </head>
    <body>
        <div id="containerr">
            
                <div class="text-center darkColor" style="padding: 7px">Gestionar Usuarios</div>
                <br>  
                
         </div>      
        <div class="text-center" id="containerr2">
            <div class="text-center darkColor" style="padding: 7px">Donar d'alta</div>
          

        {{-- Totes les dades de l`usuari --}}

        <h5> Nom Usuari: {{$DadesUsuari->nomUsuari}}</h5>
        <h5> Nom: {{$DadesUsuari->nom}}</h5>
        <h5> Cognom: {{$DadesUsuari->cognoms}}</h5>
        <h5> Email: {{$DadesUsuari->email}}</h5>
        <h5> Dades Postals: {{$DadesUsuari->dadesPostals}}</h5>
        <h5> Data Alta: {{$DadesUsuari->dataAlta}}</h5>
        <h5> Estat: {{$DadesUsuari->estat}}</h5>
        
        <?php
        if (($DadesUsuari->estat)==1) {
            echo "<p> <label>Donat d'alta: </label>Si<p>";
            echo " ";
            echo ("<button type='button' class='btn btn-warning'>Cancelar</button>");
        }
        elseif (($DadesUsuari->estat)==0) {
            echo "<p> <label>Donat d'alta: </label>No<p>";
            echo " ";
            echo ("<button type='button' class='btn btn-warning'>Donar d'Alta</button>");
            echo " ";
            echo ("<button type='button' class='btn btn-warning'>Cancelar</button>");
        }
        ?>
        
        
            
        </div>
            
    
               
        
       

        <script src="{{ url('/js/jquery.min.js') }}"></script>
         <!--Include all compiled plugins (below), or include individual files as needed--> 
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    </body>
</html>
