<div>
    <input type="text" id="buscaUsuari" placeholder="Buscar usuari" onkeyup="buscaUsuari()">

    <div id="usuaris">


        @foreach( $usuaris as $usuari )   
        

        <input type="checkbox" style="cursor:default;" name="usuari" value="usuari">{{ $usuari->nomUsuari }}<br>
        
 
        @endforeach

    </div>
    <button>Afegir</button>

    <input type="text" id="buscaUsuariGrup" placeholder="Buscar usuari">
    <div id="usuarisGrup">

        @foreach( $usuariGrups as $usuariGrup )
        @foreach( $usuaris as $usuari )
        @if( $usuari->idUsuari === $usuariGrup->idUsuari )

        <input type="checkbox" style="cursor:default;" name="usuari" value="usuari">{{ $usuari->nomUsuari }}<br>

        @endif
        @endforeach
        @endforeach


    </div>
    <button>Eliminar</button>
</div> 

