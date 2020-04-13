<template>
<main class="mb-3">
	<!-- BANNER AZUL -->
		<div class="banner2 pb-2 pt-4">
			<div class="container-fluid m-0">
				<div class="row">
					<div class="col-12 col-lg-6 pt-md-4 parte">
						<h1 class="pl-lg-5  text-center text-lg-left">¿Quieres formar parte?</h1>
						<h2 id="h2banner" class=" mx-auto text-lg-left ml-lg-4">Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit.</h2>
						<br>
						<a href="">
							<button type="button" class="btn d-none d-lg-block ml-5">Únete a nosotros</button>
						</a>
					</div>
					<div class="col-12 col-lg-6 mt-md-2">
						<!-- video -->
						<video poster="img/poster.jpg" preload="auto" controls>
							<source src="img/videos/proteco.mp4" type="video/mp4">
						</video>					
					</div>
					<div class="col-12 col-lg-6 d-block d-lg-none">	
						<a href="">
							<button type="button" class="btn mt-2 pl-5 pl-5 pr-5 ">Únete a nosotros</button>
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
				<!-- cards -->
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
										<button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                                        data-rel="6"><span aria-hidden="true">×</span></button>
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
									<span href="" class="show card-link text-right" data-rel="6" title="Ver detalles del curso">
                                        Ver más</span>	

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
												<span href="" class="show card-link text-primary" data-rel="21" 
                                                itle="Ver detalles del curso">Ver más</span>
											</div>
										</div>											
									</div>
								</div>
								<!-- reveal -->
								<div class="card-reveal " data-rel="21">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                                    data-rel="21"><span aria-hidden="true">×</span></button>
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
												<span href="" class="show card-link text-primary" data-rel="22" 
                                                title="Ver detalles del curso">Ver más</span>
											</div>
										</div>											
									</div>
								</div>
								<!-- reveal -->
								<div class="card-reveal bg-light" data-rel="22">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                                    data-rel="22"><span aria-hidden="true">×</span></button>
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
						<img class="img-fluid" src="img/logos/java.png" title="Java" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/python.png" title="Python" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/ios.png" title="iOS" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/linux.png" title="Linux" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/android.png" title="Android" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/html.png"  title="HTML" alt="">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/arduino.png" title="Java" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/latex.gif" title="Python" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/excel.png" title="Excel" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/matlab.png" title="Linux" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/c.png" title="Android" alt="">
					</div>
					<div class="col-md-2 col-4">
						<img class="img-fluid" src="img/logos/sql.png"  title="HTML" alt="">
					</div>
				</div>
			</div>
		</div>
</main>
</template>

<script>
import CursosCarrousel from '../components/CursosCarrousel'
export default {
    components :{
        CursosCarrousel
    }
    
}
</script>

<style scoped>
@media (min-width: 768px) and (max-width: 992px) {
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%; 
        z-index: -1;
        display: block;
        visibility: visible;
    }
}

@media (min-width: 576px) and (max-width: 768px) {
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  
        z-index: -1;
        display: block;
        visibility: visible;
    }

}
@media(max-width: 576px){
    .card-car{
        width: 90%;
        margin: 0 auto;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
      position: relative;
      transform: translate3d(0, 0, 0);
    }
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    } 
    
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

}

/*MD*/
@media (min-width: 768px) {

  .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
 
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + 
    .carousel-item + .carousel-item {
        transition: none;
    }
  
    
    .carousel-inner .carousel-item-next {
      position: relative;
      transform: translate3d(0, 0, 0);
    }
    
    
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

}


/*LG */
@media (min-width: 991px) {

    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + 
    .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + 
    .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%; 
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + 
    .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + 
    .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

}

</style>