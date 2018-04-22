@extends('temas.cabecera')

@section('content')

    <div class="container" style="padding-top: 100px">

        @if((int)$evento->count())

            <div class="row my-4">
                <div class="col-lg-8">
                    <img class="img-fluid rounded"
                         @if($evento->imagen)
                         src="{{asset("resource/{$evento->imagen}")}}"
                         @else
                         src="{{asset("img/700x300.png")}}"
                         @endif
                         width="900" height="400">
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <h1>{{$evento->titulo}}</h1>
                    <p>
                        {{$evento->breve_descripcion}}
                    </p>
                    <p>
                    <div>
                        <strong>Calificación:</strong>
                        &nbsp;
                        <span class="text-warning">
                            @for($i=1;$i<=$evento->calificacion;$i++)
                                &#9733;
                            @endfor
                            @for($i=1;$i<=5 - $evento->calificacion;$i++)
                                &#9734;
                            @endfor
                        </span>
                    </div>
                    <div>
                        <strong>Valor:</strong>
                        &nbsp;
                        ${{number_format($evento->valor)}}
                    </div>
                    <br>
                    @if($evento->facebook)
                        <div style="padding-bottom: 5px">
                            <a href="{{$evento->facebook}}" class="btn btn-block btn-social btn-facebook"
                               style="color:#fff">
                                <span class="fa fa-facebook"></span> Página oficial de Facebook
                            </a>
                        </div>
                    @endif
                    @if($evento->instagram)
                        <div>
                            <a href="{{$evento->instagram}}" class="btn btn-block btn-social btn-instagram"
                               style="color:#fff">
                                <span class="fa fa-instagram"></span> Página oficial de Instagram
                            </a>
                        </div>
                        @endif
                        </p>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            @if($evento->observaciones)
                <div class="card text-white bg-secondary my-4 text-center">
                    <div class="card-body">
                        <p class="text-white m-0">
                            {{$evento->observaciones}}
                        </p>
                    </div>
                </div>
            @endif

        <!-- Content Row -->
            <div class="row">
                <div class="col-md-12 mb-12">
                    <div class="card h-100">
                        <div class="card-body">
                            @if($evento->descripcion)
                                <h2 class="card-title">Descripcion del evento</h2>
                                <p class="card-text">
                                    {{$evento->descripcion}}
                                </p>
                            @endif
                            @if($evento->fecha)
                                <div>
                                    <strong>Fecha:</strong>
                                    &nbsp;
                                    {{$evento->fecha}}
                                </div>
                            @endif
                            <div>
                                <strong>Horario:</strong>
                                &nbsp;
                                @if($evento->ingreso){{$evento->ingreso}}@endif @if($evento->salida)
                                    - {{$evento->salida}}@endif
                            </div>
                            @if($evento->direccion)
                                <div>
                                    <strong>Dirección:</strong>
                                    &nbsp;
                                    {{$evento->direccion}}
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="lista">Ver mas eventos</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

        @else
            <div class="alert alert-info text-center">
                El evento no existe...
            </div>
        @endif

    </div>

    <!-- Footer -->
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
@endsection