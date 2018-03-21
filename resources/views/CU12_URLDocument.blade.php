<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URL</title>

        <!-- Bootstrap and my style-->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/CU_12.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="newURL">
            <div class="text-center darkColor">URL</div>
            <form id="URL" name="URL" class="form-horizontal" method="GET" action="">
                <div class="controls">
                    {{ csrf_field() }}                 
                        <div class="col-sm-9">
                            <input type="text" name="urlDocument" id="urlDocument" class="form-control" placeholder="URL" value="" required />
                        </div>
                    <button class="btn btn-default btn-xs active" type="submit">Copiar</button>
                </div>
            </form>
            <div class="text-right darkColor"></div>
        </div>

        <script src="{{ url('/js/jquery.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
  </body>
</html>