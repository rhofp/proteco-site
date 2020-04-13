<template>
    <div class="mb-3 mainR" style="flex: 1 0 auto;
		margin-top: 55px;">
		<!-- BANNER AZUL -->
		<div class="banner22 d-none d-md-block">	
		</div>		
		<!-- FORMULARIO -->
		<div class="card cardInicioS mx-auto">
			<div class="container">
				<div class="card-body bodyI">
					<h5 class="card-title">¡Hola! Ingresa tus datos</h5><br><br>
					<form class="fInicio pb-3">
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
						</div>
						<div class="form-check text-left pt-2">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label text-secondary" for="exampleCheck1">Recordar mis datos</label><br>
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
					</form>
					<small class="text-left text-secondary pt-2 font-weight-bold" data-toggle="modal" data-target="#exampleModalCenter" style="cursor: pointer;">¿Olvidaste tu contraseña?</small>
					<!-- MODAL DE OLVIDAR CONTRASEÑA -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5>Completa tus datos</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
									  <div class="row">
									    <div class="col">
									      <input type="password" class="form-control" placeholder="Ingresa tu nueva contraseña">
									    </div>
									    <div class="col">
									      <input type="password" class="form-control" placeholder="Confirmar contraseña">
									    </div>
									  </div>
									</form><br>
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</template>

<style scoped>
@import url('../assets/css/mediaqueries.css');
/*INICIO SESIÓN*/
	.banner22{
		background-color: #022c43;
		padding-top: 40vh;
		text-align: center;
	}
	.bodyI{
		padding: 8vh 5vw;
	}
	.fInicio input, .fInicio select, .bodyI .modal input{
		border-style: none;
		border-bottom-style: solid;
		font-family: 'PT Sans', sans-serif;	
		font-size: calc(.7rem + .3vw);
	}
	.fInicio label{
		font-family: 'PT Sans', sans-serif;	
		font-size: calc(.7rem + .3vw);
	}
	.fInicio button{
		width: 100%;
		font-family: 'PT Sans', sans-serif;	
		font-size: calc(.7rem + .3vw);
	}
</style>