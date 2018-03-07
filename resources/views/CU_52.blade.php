<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crear Usuari</title>

        <!-- Bootstrap and my style-->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/CU_52.css') }}" rel="stylesheet">

    </head>
    <body>

        <div id="containerNewUser">
            <div class="text-center darkColor">Crear nou usuari</div>
            <div>{!! Notification::showAll() !!}</div>
            <form id="formNewUser" name="formNewUser" class="form-horizontal" method="POST" action="{{ url('/newUser') }}">
                <div class="controls">
                    {{ csrf_field() }}
                    <!--
                      * este codigo queda mas limpio con la linea de arriba solo
                    <input type="hidden" name="_token" value="<?php //echo csrf_token()                                                                                                                                  ?>" />-->
                    <div class="form-group">
                        <label for="nomUsuari" class="col-sm-3 control-label">Nom Usuari:</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomUsuari" id="nomUsuari" class="form-control" placeholder="Nom Usuari" value="{{ old('nomUsuari') }}" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contrasenya" class="col-sm-3 control-label">Contrasenya:</label>
                        <div class="col-sm-9">
                            <input type="password" name="contrasenya" id="contrasenya" class="form-control" placeholder="Contrasenya"  value="{{ old('pass')}}" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nom" class="col-sm-3 control-label">Nom:</label>
                        <div class="col-sm-9">
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="{{ old('nom')}}" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cognoms" class="col-sm-3 control-label">Cogmons:</label>
                        <div class="col-sm-9">
                            <input type="text" name="cognoms" id="cognoms" class="form-control" placeholder="Cognoms"  value="{{ old('cognoms')}}" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"  value="{{ old('email')}}" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dadesPostals" class="col-sm-3 control-label">Dades Postals:</label>
                        <div class="col-sm-9">
                            <input type="text" name="dadesPostals" id="dadesPostals" class="form-control" placeholder="Dades Postals"  value="{{ old('dadesPostals')}}" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Estat:</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="estat" name="estat" value="0" checked required /> Alta
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="estat" name="estat" value="1" required /> Baixa
                            </label>
                        </div>
                        <div class="col-sm-5">
                            <select id="tipus" name="tipus" class="form-control" required>
                                <option value="" disabled selected>-- Tipus --</option>
                                <option value="Estandar">Estandar</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button class="btn btn-default btn-xs active" type="submit">Crear</button>
                </div>
            </form>
        </div>

        <script src="{{ url('/js/jquery.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    </body>
</html>
