<template>
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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                                data-rel="1"><span aria-hidden="true">×</span></button>
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
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" 
                            title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="" class="show card-link text-right text-primary" data-rel="1" 
                            title="Ver detalles del curso">Ver más</span>
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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                                data-rel="2"><span aria-hidden="true">×</span></button>
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
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" 
                            title="Agregar al carrito">shopping_cart</i></a>
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
                                <button type="button" class="close" data-dismiss="modal" data-rel="3" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
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
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" 
                            title="Agregar al carrito">shopping_cart</i></a>
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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="4">
                                    <span aria-hidden="true">×</span></button>
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
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" 
                            title="Agregar al carrito">shopping_cart</i></a>
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
                                <button type="button" class="close" data-dismiss="modal" data-rel="5" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
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
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" 
                            title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="" class="show card-link text-right text-primary" data-rel="5" 
                            title="Ver detalles del curso">Ver más</span>

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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="6">
                                    <span aria-hidden="true">×</span></button>
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
                            <a href="#" class="card-link" title="Agregar al carrito"><i class="material-icons" 
                            title="Agregar al carrito">shopping_cart</i></a>
                            <a href="#" class="card-link" title="Ver el temario">Temario</a>
                            <span href="" class="show card-link text-right" data-rel="6" title="Ver detalles del curso">Ver más</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>