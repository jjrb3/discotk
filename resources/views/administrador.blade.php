<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Discotk</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .iconos {
            color: #da575d;
        }

        .iconos:hover {
            color: #da575d94;
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="administrador">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-white">
                    <a class="nav-link active">
                        Bienvenido, {{$usuario}}.
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">
                        -
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="salir">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="masthead-content">
        <div class="container" style="margin-top: -100px;">
            <div class="row">
                <div class="col-md-12 mb-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="administrador" method="get">
                                <div class="input-group">
                                    <input type="text"
                                           class="form-control"
                                           placeholder="Digite el nombre, fecha o valor del eventó que desee buscar..."
                                           name="busqueda"
                                    >
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                    <a href="crear-editar">
                                        <button class="btn btn-primary" type="button">
                                            Crear nuevo evento
                                        </button>
                                    </a>
                                </span>
                                </div>
                            </form>
                            <br>
                            @if((int)$eventos->count())
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped tablesorter">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Fecha</th>
                                            <th class="text-center">Valor</th>
                                            <th class="text-center">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($eventos as $evento)
                                        <tr>
                                            <td>{{$evento->titulo}}</td>
                                            <td align="center">{{$evento->fecha}}</td>
                                            <td align="center">${{number_format($evento->valor)}}</td>
                                            <td width="15%" align="center">
                                                <a href="ver-detalle/?id={{$evento->id}}">
                                                    <i class="fa fa-eye fa-2x iconos"></i>
                                                </a>
                                                <a href="crear-editar/?id={{$evento->id}}">
                                                    <i class="fa fa-pencil fa-2x iconos"></i>
                                                </a>
                                                <a href="#" onclick="eliminar(parseInt({{$evento->id}}))">
                                                    <i class="fa fa-trash fa-2x iconos"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-info text-center">
                                    No se encontraron eventos...
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>

<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Discotk 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
