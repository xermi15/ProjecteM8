
    <table style="text-align: center;" class="table table-condensed table-striped table-bordered">
        <thead>
            <tr>
                <th style="text-align: center;">Nom</th>
                <th style="text-align: center;">Membres</th>
                <th style="text-align: center;">Opcions</th>  
            </tr>
        </thead>
        <tbody>
            <!--recorre grupos-->
            @foreach( $grups as $grup )
                <tr>
                    <td>{{ $grup->idGrup }}</td>
                    <!-- recorre usuarisGrup -->
                    @foreach( $usuariGrups as $usuariGrup )
                        <!-- recorre usuaris -->
                        @foreach( $usuaris as $usuari )
                            <!-- si idGrups = idGrups(usuariGrups) y idUsuari = idUsuari(usuariGrups) imprime el id de ese usuario-->
                            @if({{ $grup->idGrup }}==={{ $usuariGrup->idGrup }})
                                @if({{ $usuari->idUsuari }}==={{ $usuariGrup->idUsuari }})
                                    <td>{{ $usuari->idUsuari }}</td>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                    <td>
                        @include('CU_38_ModificarGrupo')
                        @include('CU_37_EliminarGrupo')
                        <a class="glyphicon glyphicon-circle-arrow-right" href="" ></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
