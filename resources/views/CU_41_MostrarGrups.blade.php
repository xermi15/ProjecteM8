<table style="text-align: center;" class="table table-condensed table-striped table-bordered">
    <thead>
        <tr>
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Membres</th>
            <th style="text-align: center;">Opcions</th>  
        </tr>
    </thead>
    <tbody>
        @foreach( $grups as $grup )
        <tr>
            <td id="nombreGrupo" value="{{ $grup->nom }}">{{ $grup->nom }}
                <input type="hidden" name="idGrup" id="idGrup" value="{{ $grup->idGrup }}">
                <input type="hidden" name="nomGrup" id="nomGrup" value="{{ $grup->nom }}">
            
            </td>
            <td id="nombreMiembros">
                @foreach( $usuariGrups as $usuariGrup )

                @foreach( $usuaris as $usuari )
                @if( $grup->idGrup === $usuariGrup->idGrup )

                @if( $usuari->idUsuari === $usuariGrup->idUsuari )
                {{ $usuari->nomUsuari }}
                <input type="hidden" name="idUsuariGrup" value="{{ $usuari->idUsuari }}">
                @endif
                @endif
                @endforeach

                @endforeach
            </td>
            <td>
                @include('CU_38_ModificarGrup')
                @include('CU_37_EliminarGrup')
                <a class="glyphicon glyphicon-circle-arrow-right" href=""></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>