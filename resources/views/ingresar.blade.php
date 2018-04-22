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
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="lista.html">Lista de eventos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ingresar.html">Ingresar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card h-100">
                    <form action="ingresar" method="get">
                        <div class="card-body">
                            <div class="form-group text-left">
                                <label style="color:#847592">
                                    <i class="fa fa-user size-16" aria-hidden="true"></i> Usuario
                                </label>
                                <input type="text" class="form-control" name="usuario"
                                       placeholder="Ingresar usuario...">
                            </div>
                            <div class="form-group text-left">
                                <label style="color:#847592">
                                    <i class="fa fa-key size-16" aria-hidden="true"></i> Contraseña
                                </label>
                                <input type="password" class="form-control" name="clave"
                                       placeholder="Ingresar contraseña...">
                            </div>
                            @if($mensaje)
                                <div class="alert alert-danger text-center">
                                    {{$mensaje}}
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
