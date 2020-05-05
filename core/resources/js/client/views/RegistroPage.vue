<template>
    	<div class="mb-3 mainR">
		<!-- BANNER AZUL -->
		<div class="banner22 d-none d-md-block">	
		</div>		
		<!-- FORMULARIO -->
		<div class="card cardR mx-auto">
			<div class="container">
				<div class="card-body bodyR">
					<h5 class="card-title">Completa tus datos</h5><br><br>
					<form class="fInicio">
					  <div class="row">
					    <div class="col">
					      <input type="text" class="form-control" placeholder="Nombre(s)*">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" placeholder="Apellido paterno*">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" placeholder="Apellido materno*">
					    </div>
					  </div>
					  <div class="row pt-3">
					  	<div class="col">
					  		<input type="email" class="form-control" placeholder="Correo*">
					  	</div>
					  </div>
					  <div class="row pt-3">
					      <div class="col">
					        <input type="password" class="form-control" placeholder="Contraseña*">
					      </div>
					      <div class="col">
					        <input type="password" class="form-control" placeholder="Confirmar contraseña*">
					      </div>
					    </div>
					    <div class="row pt-3">
					    	<div class="col">
					    		<select class="custom-select text-secondary">
					    		  <option selected disabled class="text-secondary">Procedencia*</option>
					    		  <option value="1" class="text-dark">Miembro UNAM</option>
					    		  <option value="2" class="text-dark">Estudiante Externo</option>
					    		  <option value="3" class="text-dark">Público General</option>
					    		</select>
					    	</div>
					    	<div class="col">
					    		<input type="text" class="form-control" placeholder="Número de cuenta*">
					    	</div>
					    </div><br>
					     <button type="submit" class="btn btn-primary">Crear Cuenta</button>
					     <small class="text-left text-secondary pt-2">*Campos Requeridos</small>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<style scoped>
@import url('../assets/css/mediaqueries.css');
/*REGISTRO*/
    .banner22{
		background-color: #022c43;
		padding-top: 40vh;
		text-align: center;
	}
	.bodyR{
		padding: 8vh 5vw;
	}
	.fInicio small{
		font-family: 'PT Sans', sans-serif;	
		display: block;
	}
	.bodyR h5, .bodyI h5{
		font-family: 'PT Sans', sans-serif;	
		text-align: center;
		font-size: calc(1.2rem + .3vw);
		font-weight: bold;
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