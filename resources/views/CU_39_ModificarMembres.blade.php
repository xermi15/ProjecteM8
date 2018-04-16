<div class="containerModificaMembres">
    <div class="columnUsuaris">
        <input type="text" id="buscaUsuari" placeholder="Buscar usuari" onkeyup="buscaUsuari()">

        <div id="usuaris">


            @foreach( $usuaris as $usuari )   


            <input type="checkbox" style="cursor:default;" name="usuari" value="usuari">{{ $usuari->nomUsuari }}<br>


            @endforeach

        </div>
    </div>
    <div class="columnButons">
        <div class="afegirEliminarBtn">
            <button type="button" class="afegirBtn btn btn-light"> 
                Afegir
                <i class="glyphicon glyphicon-chevron-right"></i> 
            </button>
            <button type="button" class="eliminarBtn btn btn-light"> 
                <i class="glyphicon glyphicon-chevron-left"></i>
                Eliminar
            </button>
        </div>
    </div>
    <div class="columnUsuarisGrup">
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
    </div>
</div> 