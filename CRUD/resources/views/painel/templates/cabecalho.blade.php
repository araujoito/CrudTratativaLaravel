<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="{{url('js/app.js')}}">
        <link rel="stylesheet" href="{{url('painel/style.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="cotainer">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand">Crud Tratativa</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('painel/pessoas') }}">Listar</a></li>
                        <li><a href="{{ url('painel/pessoas/Cadastro') }}">Cadastrar</a></li>
                    </ul>
                </div>
            </nav>
            @yield('content')
            
        </div>


    </body>
</html>
