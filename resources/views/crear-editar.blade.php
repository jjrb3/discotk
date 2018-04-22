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
                        Bienvenido, Jeremy Reyes B.
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
                        <form action="guardar-crear-editar" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$id}}">
                            <div class="card-body">
                                <h2 align="center">
                                    @if($id)
                                        Actualizar evento
                                    @else
                                        Crear evento
                                    @endif
                                </h2>
                                <br>
                                @if($mensaje)
                                    <div class="alert alert-warning text-center">
                                        {{$mensaje}}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Imagen.
                                        </label>
                                        <input type="file" class="form-control" name="imagen">
                                    </div>
                                    <div class="col-lg-4 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Título.
                                        </label>
                                        <input type="text" class="form-control" name="titulo"
                                               placeholder="Digite un titulo..." maxlength="50"
                                               value="{{$evento->titulo}}" required>
                                    </div>
                                    <div class="col-lg-5 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Breve descripción.
                                        </label>
                                        <input type="text" class="form-control" name="breve_descripcion"
                                               value="{{$evento->breve_descripcion}}"
                                               placeholder="Digite una breve descripcion..." maxlength="150" required>
                                    </div>

                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Calificación.
                                        </label>
                                        <select class="form-control" name="calificacion" id="calificacion">
                                            <option value="1">1 Estrella</option>
                                            <option value="2">2 Estrella</option>
                                            <option value="3">3 Estrella</option>
                                            <option value="4">4 Estrella</option>
                                            <option value="5">5 Estrella</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Valor.
                                        </label>
                                        <input type="text" class="form-control" name="valor" value="{{$evento->valor}}"
                                               placeholder="Digite el valor..." maxlength="10">
                                    </div>
                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Url Facebook.
                                        </label>
                                        <input type="text" class="form-control" name="facebook"
                                               value="{{$evento->facebook}}"
                                               placeholder="Digite la url de facebook..." maxlength="200">
                                    </div>
                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Url Instagram.
                                        </label>
                                        <input type="text" class="form-control" name="instagram"
                                               value="{{$evento->instagram}}"
                                               placeholder="Digite la url de instagram..." maxlength="200">
                                    </div>

                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Fecha.
                                        </label>
                                        <input type="date" class="form-control" name="fecha" placeholder="aaaa-mm-dd"
                                               required
                                               maxlength="10" value="{{$evento->fecha}}">
                                    </div>
                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Horario de ingreso.
                                        </label>
                                        <select class="form-control" name="ingreso" id="ingreso">
                                            <option value='00:00 AM'>00:00 AM</option>
                                            <option value='01:00 AM'>01:00 AM</option>
                                            <option value='02:00 AM'>02:00 AM</option>
                                            <option value='03:00 AM'>03:00 AM</option>
                                            <option value='04:00 AM'>04:00 AM</option>
                                            <option value='05:00 AM'>05:00 AM</option>
                                            <option value='06:00 AM'>06:00 AM</option>
                                            <option value='07:00 AM'>07:00 AM</option>
                                            <option value='08:00 AM'>08:00 AM</option>
                                            <option value='09:00 AM'>09:00 AM</option>
                                            <option value='10:00 AM'>10:00 AM</option>
                                            <option value='11:00 AM'>11:00 AM</option>
                                            <option value='12:00 PM'>12:00 PM</option>
                                            <option value='01:00 PM'>01:00 PM</option>
                                            <option value='02:00 PM'>02:00 PM</option>
                                            <option value='03:00 PM'>03:00 PM</option>
                                            <option value='04:00 PM'>04:00 PM</option>
                                            <option value='05:00 PM'>05:00 PM</option>
                                            <option value='06:00 PM'>06:00 PM</option>
                                            <option value='07:00 PM'>07:00 PM</option>
                                            <option value='08:00 PM'>08:00 PM</option>
                                            <option value='09:00 PM'>09:00 PM</option>
                                            <option value='10:00 PM'>10:00 PM</option>
                                            <option value='11:00 PM'>11:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Horario de salida.
                                        </label>
                                        <select class="form-control" name="salida" id="salida">
                                            <option value='00:00 AM'>00:00 AM</option>
                                            <option value='01:00 AM'>01:00 AM</option>
                                            <option value='02:00 AM'>02:00 AM</option>
                                            <option value='03:00 AM'>03:00 AM</option>
                                            <option value='04:00 AM'>04:00 AM</option>
                                            <option value='05:00 AM'>05:00 AM</option>
                                            <option value='06:00 AM'>06:00 AM</option>
                                            <option value='07:00 AM'>07:00 AM</option>
                                            <option value='08:00 AM'>08:00 AM</option>
                                            <option value='09:00 AM'>09:00 AM</option>
                                            <option value='10:00 AM'>10:00 AM</option>
                                            <option value='11:00 AM'>11:00 AM</option>
                                            <option value='12:00 PM'>12:00 PM</option>
                                            <option value='01:00 PM'>01:00 PM</option>
                                            <option value='02:00 PM'>02:00 PM</option>
                                            <option value='03:00 PM'>03:00 PM</option>
                                            <option value='04:00 PM'>04:00 PM</option>
                                            <option value='05:00 PM'>05:00 PM</option>
                                            <option value='06:00 PM'>06:00 PM</option>
                                            <option value='07:00 PM'>07:00 PM</option>
                                            <option value='08:00 PM'>08:00 PM</option>
                                            <option value='09:00 PM'>09:00 PM</option>
                                            <option value='10:00 PM'>10:00 PM</option>
                                            <option value='11:00 PM'>11:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Dirección.
                                        </label>
                                        <input type="text" class="form-control" name="direccion"
                                               value="{{$evento->direccion}}"
                                               placeholder="Digite la dirección..." maxlength="50">
                                    </div>
                                    <div class="col-lg-6 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Descripción.
                                        </label>
                                        <textarea class="form-control" name="descripcion"
                                                  placeholder="Digite la descripción..." rows="10"
                                                  required>{{$evento->descripcion}}</textarea>
                                    </div>
                                    <div class="col-lg-6 form-group text-left">
                                        <label style="color:#585858; font-weight: 700">
                                            Observaciones.
                                        </label>
                                        <textarea class="form-control" name="observaciones"
                                                  placeholder="Digite una breve observación..."
                                                  rows="10">{{$evento->observaciones}}</textarea>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

@if($id)
    <script>
        $(document).ready(function () {
            $('#calificacion').val('{{$evento->calificacion}}');
            $('#ingreso').val('{{$evento->ingreso}}');
            $('#salida').val('{{$evento->salida}}');
        });
    </script>
@endif
</body>

</html>
