<div>
    <input type="text" id="buscaUsuari" placeholder="Buscar usuari">

    <div id="usuaris">


        @foreach( $usuaris as $usuari )   
            <p style="text-align: center">{{ $usuari->nomUsuari }}</p>

        <!--     
            <label for="cbox2">{{ $usuari->nomUsuari }}</label>
            <input type="checkbox" id="cbox2" value="second_checkbox">
        -->
        @endforeach

    </div>
    <button>Afegir</button>

    <input type="text" id="buscaUsuariGrup" placeholder="Buscar usuari">
    <div id="usuarisGrup">

        @foreach( $usuariGrups as $usuariGrup )
            @foreach( $usuaris as $usuari )
                @if( $usuari->idUsuari === $usuariGrup->idUsuari )
                
                <p style="text-align: center">{{ $usuari->nomUsuari }}</p>

                <!--
                    <label for="cbox2">{{ $usuari->nomUsuari }}</label>
                    <input type="checkbox" id="cbox2" value="second_checkbox">
                -->
                @endif
            @endforeach
        @endforeach


    </div>
    <button>Eliminar</button>
</div> 