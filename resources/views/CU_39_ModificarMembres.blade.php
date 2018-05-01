<div class="containerModificaMembres">
    <div class="columnUsuaris">
        <p type="text" id="usuaris">Usuaris</p>
        <input type="text" id="buscaUsuari" placeholder="Buscar usuari" onkeyup="buscaUsuari()">
        @foreach( $usuaris as $usuari )   
        <label id="idusuari{{$usuari->idUsuari}}"><input type="checkbox" id="idusuari{{$usuari->idUsuari}}" style="cursor:default;" name="usuari" value="usuari">{{ $usuari->nomUsuari }}</label><br>
        @endforeach
    </div>
    <div class="columnButons">
        <button type="button" class="afegirBtn btn btn-light" onclick="afegirUsuari(this)"> 
            Afegir
            <i class="glyphicon glyphicon-chevron-right"></i> 
        </button>
        <button type="button" class="eliminarBtn btn btn-light" onclick="eliminarUsuari(this)"> 
            <i class="glyphicon glyphicon-chevron-left"></i>
            Eliminar
        </button>
    </div>
    <div class="columnUsuarisGrup">
        {{ csrf_field() }}
        <p type="text" id="usuaris">Usuaris del Grup</p>
        <input type="text" id="buscaUsuariGrup" placeholder="Buscar usuari">

        @foreach( $usuariGrups as $usuariGrup )
        @foreach( $usuaris as $usuari )
        @if( $usuari->idUsuari === $usuariGrup->idUsuari )

        <label id="idusuari{{$usuari->idUsuari}}"><input type="checkbox" id="idusuari{{$usuari->idUsuari}}" style="cursor:default;" name="usuari" value="usuari">{{ $usuari->nomUsuari }}</label><br>
        @endif
        @endforeach
        @endforeach
    </div>
</div> 