<div class="containerModificaMembres">
    <div class="columnUsuaris">
        <p type="text" id="idgrup">Id: {{$grup->idGrup}}</p>
        <input type="text" id="buscaUsuari" placeholder="Buscar usuari" onkeyup="buscaUsuari()">
        

        <div id="usuaris">


            @foreach( $usuaris as $usuari )   


            <input type="checkbox" style="cursor:default;" name="usuari" value="usuari">{{ $usuari->nomUsuari }}<br>
            <p type="text" id="idusuari">Id: {{$usuari->idUsuari}}</p>

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
    <form>
    <div class="columnUsuarisGrup">
        {{ csrf_field() }}
        <input type="text" id="buscaUsuariGrup" placeholder="Buscar usuari">
        <div id="usuarisGrup">

            @foreach( $usuariGrups as $usuariGrup )
            @foreach( $usuaris as $usuari )
            @if( $usuari->idUsuari === $usuariGrup->idUsuari )

            <input type="checkbox" id="cu_39nomUsuari" style="cursor:default;" name="usuari" value="usuari">{{ $usuari->nomUsuari }}<br>
            
            @endif
            @endforeach
            @endforeach
        </div>
    </div>
        </form>
</div> 