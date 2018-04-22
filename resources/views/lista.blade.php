@extends('temas.cabecera')

@section('content')
    <section>
        <div class="container" style="padding-top: 100px">
            <div class="container">
                <form action="lista" method="get">
                    <div class="input-group">
                        <input type="text" name="busqueda" class="form-control"
                               placeholder="Digite el nombre o valor del eventó que desee buscar...">
                        <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </span>
                    </div>
                </form>
                <!-- Page Heading -->
                <h1 class="my-4">Eventos
                    <small>los mas recientes!</small>
                </h1>
                <!-- Project One -->
                @if((int)$eventos->count())
                    @foreach($eventos as $evento)
                        <div class="row">
                            <div class="col-md-7">
                                <a href="#">
                                    <img class="img-fluid rounded mb-3 mb-md-0"
                                         @if($evento->imagen)
                                         src="{{asset("resource/{$evento->imagen}")}}"
                                         @else
                                         src="{{asset("img/700x300.png")}}"
                                         @endif
                                         alt="" width="700" height="300">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3>{{$evento->titulo}}</h3>
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
                                </p>
                                <a class="btn btn-primary" href="detalle/?id={{$evento->id}}">Detalle del evento</a>
                            </div>
                        </div>
                        <!-- /.row -->

                        <hr>
                    @endforeach
                @else
                    <div class="alert alert-info text-center">
                        No se encontrarón eventos...
                    </div>
                @endif


                <br>
                <br>
            </div>
        </div>
    </section>

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