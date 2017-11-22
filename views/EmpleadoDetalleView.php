<?php 

	require_once("../controllers/EmpleadoController.php");

	$empleado = EmpleadoController::obtenerUnEmpleado($_GET['id']);

 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	</head>
	<body>

		<!--HEADER-->
		<div class="container-fluid">

			<div class="row">
				
				
			<?php
				include_once("navbar.php");
			?>				
			</div>



			<div class="row">

				<!--para el panel -->
				<div class="col-md-2">
					<?php include("panelIzquierda.php"); ?>
				</div>


				<!--para el cuerpo-->
				<div class="col-md-10">

						<div class="panel panel-default panel-body">
							
							<div class="container-fluid">
								

							<div class="row">
								<div class="pull-right">
									<button class="btn btn-default">ELIMINAR</button>
								</div>
							</div>

							<div class="row">
								<form action="" method="POST" role="form" class="form-horizontal"> 
									
									<div class="form-group">
						   				<label for="id" class="col-lg-2 control-label">id</label>
									    <div class="col-lg-5">

									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getIdEmpleado().'" disabled="true">'; ?>
									    	
									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="apellido" class="col-lg-2 control-label">Apellido</label>
									    <div class="col-lg-5">
									    	
											<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getApellido().'" disabled="true">'; ?>

									    </div>
						  			</div>
							
									<div class="form-group">
						   				<label for="nombre" class="col-lg-2 control-label">Nombre</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getNombre().'" disabled="true">'; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="legajo" class="col-lg-2 control-label">Legajo</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getLegajo().'" disabled="true">'; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="fechaIngreso" class="col-lg-2 control-label">Fecha de Ingreso</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getFechaIngreso().'" disabled="true">'; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="dni" class="col-lg-2 control-label">DNI</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getDni().'" disabled="true">'; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="cuil" class="col-lg-2 control-label">CUIL</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getCuil().'" disabled="true">'; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="fechaNacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getFechaNacimiento().'" disabled="true">'; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="telefono" class="col-lg-2 control-label">Telefono</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getTelefono().'" disabled="true">'; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="mail" class="col-lg-2 control-label">Email</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getEmail().'" disabled="true">'; ?>
									    </div>
						  			</div>
									

									<div class="form-group">
						   				<label for="domicilio" class="col-lg-2 control-label">Domicilio</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getDomicilio().'" disabled="true">'; ?>
									    </div>
						  			</div>


									<div class="form-group">
						   				<label for="sexo" class="col-lg-2 control-label">Sexo</label>

						   				<div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" id="apellido" value="'.$empleado->getSexo().'" disabled="true">'; ?>
									    </div>
									   
						  			</div>

								</form>
							</div>
							</div>
						</div>
				</div>

			</div>

		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
</html>
