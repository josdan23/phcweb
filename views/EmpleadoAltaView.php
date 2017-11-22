<?php 

	if (isset($_POST['apellido'])) {
		
		require_once("../controllers/EmpleadoController.php");


		EmpleadoController::agregarEmpleado(
			$_POST['apellido'],
			$_POST['nombre'],
			$_POST['legajo'],
			$_POST['fechaIngreso'],
			$_POST['dni'],
			$_POST['cuil'],
			$_POST['fechaNacimiento'],
			1,
			$_POST['telefono'],
			$_POST['mail'],
			$_POST['domicilio'],
			$_POST['sexo']);
	}

 ?>


<div class="container-fluid">

	<div class="row">

		<div class="col-md-6">
			<h4>NUEVO EMPLEADO</h4>
		</div>
	</div>

	<div class="row">
		<hr>
	</div>

	<div class="row">

		<form action="" method="POST" role="form" class="form-horizontal"> 


			<div class="form-group">
   				<label for="apellido" class="col-lg-2 control-label">Apellido</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="apellido" name="apellido"
			             placeholder="Apellido del empleado">
			    </div>
  			</div>
	
			<div class="form-group">
   				<label for="nombre" class="col-lg-2 control-label">Nombre</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="nombre" name="nombre"
			             placeholder="Nombre del empleado">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="legajo" class="col-lg-2 control-label">Legajo</label>
			    <div class="col-lg-5">
			    	<input type="number" class="form-control" id="legajo" name="legajo"
			             placeholder="Legajo del empleado">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="fechaIngreso" class="col-lg-2 control-label">Fecha de Ingreso</label>
			    <div class="col-lg-5">
			    	<input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso"
			             placeholder="dd-mm-aa">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="dni" class="col-lg-2 control-label">DNI</label>
			    <div class="col-lg-5">
			    	<input type="number" class="form-control" id="dni" name="dni"
			             placeholder="dni del empleado">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="cuil" class="col-lg-2 control-label">CUIL</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="cuil" name="cuil"
			             placeholder="cuil del empleado">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="fechaNacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
			    <div class="col-lg-5">
			    	<input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"
			             placeholder="dd-mm-aa">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="telefono" class="col-lg-2 control-label">Telefono</label>
			    <div class="col-lg-5">
			    	<input type="tel" class="form-control" id="telefono" name="telefono"
			             placeholder="telefono del empleado">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="mail" class="col-lg-2 control-label">Email</label>
			    <div class="col-lg-5">
			    	<input type="email" class="form-control" id="mail" name="mail"
			             placeholder="mail@example.com">
			    </div>
  			</div>
			

			<div class="form-group">
   				<label for="domicilio" class="col-lg-2 control-label">Domicilio</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="domicilio" name="domicilio"
			             placeholder="domicilio del empleado">
			    </div>
  			</div>


			<div class="form-group">
   				<label for="sexo" class="col-lg-2 control-label">Sexo</label>

   				<div class="col-lg-5">
			    	<select class="form-control" name="sexo">
						<option value="F">Femenino</option>
						<option value="M">Masculino</option>
					</select>
			    </div>
			   
  			</div>

  			<div class="form-group">
  				<div class="col-lg-offset-2 col-lg-5">
  					
					<button type="submit" class="btn btn-primary">ACEPTAR</button>
  				</div>	
  			</div>

		</form>

	</div>
</div>
