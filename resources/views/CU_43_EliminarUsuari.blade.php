<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eliminar Usuari</title>

        <!-- Bootstrap and my style-->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/CU_52.css') }}" rel="stylesheet">

    </head>
    <body>

        <button
            type="button"
            class="btn btn-primary btn-lg"
            data-toggle="modal"
            data-target="#miModal">
            Eliminar Usuari
        </button>

        <div>{!! Notification::showAll() !!}</div>

        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div id="containerUser" class="modal-content">
                    <div class="text-center darkColor">
                        Eliminar usuari {{ $usuari->nomUsuari }}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formDelUser" name="formDelUser" class="form-horizontal" method="POST" action="{{ url('/delUser') }}">
                        <div class="controls">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nomUsuari" class="col-sm-3 control-label">Nom Usuari:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nomUsuari" id="nomUsuari" class="form-control" placeholder="Nom Usuari" value="{{ $usuari->nomUsuari }}" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contrasenya" class="col-sm-3 control-label">Contrasenya:</label>
                                <div class="col-sm-9">
                                    <input type="password" name="contrasenya" id="contrasenya" class="form-control" placeholder="Contrasenya" value="{{ $usuari->contrasenya}} " required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nom" class="col-sm-3 control-label">Nom:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="{{ $usuari->nom }}" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cognoms" class="col-sm-3 control-label">Cogmons:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="cognoms" id="cognoms" class="form-control" placeholder="Cognoms" value="{{ $usuari->cognoms }}" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ $usuari->email }}" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dadesPostals" class="col-sm-3 control-label">Dades Postals:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="dadesPostals" id="dadesPostals" class="form-control" placeholder="Dades Postals" value="{{ $usuari->dadesPostals }}" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Estat:</label>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="estat" name="estat" value="1" checked required disabled {{ $usuari->estat == '1' ? 'checked' : '' }} /> Alta
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="estat" name="estat" value="0" required disabled {{ $usuari->estat == '0' ? 'checked' : '' }} /> Baixa
                                    </label>
                                </div>
                                <div class="col-sm-5">
                                    <select id="tipus" name="tipus" class="form-control" required>
                                        <option value="" disabled selected>-- Tipus --</option>
                                        <option value="Estandar" disabled {{ $usuari->tipus == 'Estandar' ? 'selected' : '' }} >Estandar</option>
                                        <option value="Administrador" disabled {{ $usuari->tipus == 'Administrador' ? 'selected' : '' }} >Administrador</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="text-right darkColor">
                            <button id="guardar" class="btn btn-danger" type="submit">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{ url('/js/jquery.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    </body>

</html>

