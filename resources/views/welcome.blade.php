@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/car.css')}}">
@endsection
@section('content')
    <!-- <div class=" banner pt-lg-5 pl-lg-5 pt-2 pb-5">
			<div class="container-fluid pt-3 pl-4">
				<h1 class="ml-lg-5">¿Quieres formar parte?</h1>
				<h2 id="h2banner" class="ml-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
				<a href="">
					<button type="button" class="btn mt-2 ml-lg-5 pl-5 pr-5">Únete a nosotros</button>
				</a>
			</div>
		</div> -->
    <!-- BANNER AZUL -->
    <div class="banner2">
        <div class="container-fluid m-0">
            <div class="row">
                <div class="col-12 col-md-6 text-left pt-md-5 pl-md-5 d-none d-md-block">
                    <h1 class="pl-lg-5">¿Quieres formar parte?</h1>
                    <h2 id="h2banner" class="pl-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                    <a href="">
                        <button type="button" class="btn mt-2 ml-md-5">Únete a nosotros</button>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <!-- video -->
                    <video poster="img/poster.jpg" class="pr-md-5" preload="auto" loop autoplay controls>
                        <source src="img/videos/proteco.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-md-6 text-center m-0 pt-md-5 pl-md-5 d-block d-md-none  mb-3 mt-2">
                    <h1 class="pl-lg-5 text-center">¿Quieres formar parte?</h1>
                    <a href="">
                        <button type="button" class="btn mt-2 pl--5 pl-5 pr-5">Únete a nosotros</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- SEMESTRALES -->
    <div class="container titulos">
        <h1 class="mt-md-4 mt-3 mb-1">Cursos semestrales</h1>
        <a href=""><h3 class="text-secondary mb-md-3 mb-3">( Ver todos )</h3></a>
    </div>
    <!-- CAROUSEL -->
    <div class="container-fluid mb-5">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <!-- controllers -->
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="carousel-inner container row w-100 mx-auto h-100" role="listbox">
                <!-- 1 -->
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <div class="card card-car">
                        <img src="img/b101.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blockchain 101</h5>
                            <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                            <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="1">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="1"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>|
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="" class="show card-link text-right text-primary" data-rel="1" title="Ver detalles del curso">Ver más</span>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-car">
                        <img src="img/b101.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blockchain 101</h5>
                            <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                            <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="2">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="2"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="#" class="show card-link text-right text-primary" data-rel="2">Ver más</span>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-car">
                        <img src="img/logo_c.png" class="card-img-top" alt="...">
                        <div class="card-body border-light">
                            <h5 class="card-title">Blockchain 101</h5>
                            <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                            <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="3">
                                <button type="button" class="close" data-dismiss="modal" data-rel="3" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="#" class="show card-link text-primary text-right" data-rel="3">Ver más</span>

                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-car">
                        <img src="img/b101.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blockchain 101</h5>
                            <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                            <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="4">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="4"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="#" class="show card-link text-right text-primary" data-rel="4">Ver más</span>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-car">
                        <img src="img/logo_c.png" class="card-img-top" alt="...">
                        <div class="card-body border-light">
                            <h5 class="card-title">Blockchain 101</h5>
                            <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                            <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="5">
                                <button type="button" class="close" data-dismiss="modal" data-rel="5" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="" class="show card-link text-right text-primary" data-rel="5" title="Ver detalles del curso">Ver más</span>

                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-car">
                        <img src="img/b101.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blockchain 101</h5>
                            <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                            <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="6">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="6"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="" class="show card-link text-right" data-rel="6" title="Ver detalles del curso">Ver más</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TALLERES -->
    <div class="jumbotron pt-4">
        <div class="container">
            <h1 class="mt-0 mb-md-4 ml-md-5">Talleres gratuitos</h1>
        </div>
        <div class="container">
            <!-- CARDS -->
            <div class="row talleres mt-4">
                <!-- 1 -->
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters text-center pt-1">
                            <!-- img -->
                            <div class="col-lg-4">
                                <img src="img/logos/android.png" class="card-img c img-fluid" alt="...">
                            </div>
                            <!-- texto -->
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title">Android</h5>
                                    <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                                    <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                                </div>
                                <div class="card-footer mt-3 container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-4 text-center">
                                            <a href="#" class="card-link" title="Agregar al carrito">Regístrate</a>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4 text-center">
                                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4 text-center">
                                            <span href="" class="show card-link text-primary" data-rel="21" title="Ver detalles del curso">Ver más</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="21">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="21"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters text-center pt-1">
                            <!-- img -->
                            <div class="col-lg-4">
                                <img src="img/logos/linux.png" class="card-img c img-fluid" alt="...">
                            </div>
                            <!-- texto -->
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title">Linux</h5>
                                    <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                                    <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                                </div>
                                <div class="card-footer mt-3 container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-4 text-center">
                                            <a href="#" class="card-link" title="Agregar al carrito">Regístrate</a>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4 text-center">
                                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4 text-center">
                                            <span href="" class="show card-link text-primary" data-rel="22" title="Ver detalles del curso">Ver más</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- reveal -->
                            <div class="card-reveal bg-light" data-rel="22">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="22"><span aria-hidden="true">×</span></button>
                                <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>
                                <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                                <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                                <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                                <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                                <p class="card-text"><span>Cupo disponible: </span>35</p>
                                <p class="card-text"><span>Costo UNAM: </span>$950</p>
                                <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                                <p class="card-text"><span>Costo público general: </span>$2800</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TECNOLOGÍAS -->
    <div class="container titulos tec">
        <h1 class="mt-md-4 mt-3 mb-1">También ofrecemos...</h1>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/java.png')}}" title="Java" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/python.png')}}" title="Python" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/ios.png')}}" title="iOS" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/linux.png')}}" title="Linux" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/android.png')}}" title="Android" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/html.png')}}"  title="HTML" alt="">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/arduino.png')}}" title="Java" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/latex.gif')}}" title="Python" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/excel.png')}}" title="Excel" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/matlab.png')}}" title="Linux" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/c.png')}}" title="Android" alt="">
                </div>
                <div class="col-md-2 col-4">
                    <img class="img-fluid" src="{{asset('img/logos/sql.png')}}"  title="HTML" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/car.js')}}"></script>
@endsection
