<?php

	require_once("../controllers/EmpleadoController.php");

	$empleado = EmpleadoController::obtenerUnEmpleado($_GET['id']);

	$disabled = "disabled";
	if(isset($_POST['modificar']))
		$disabled = "null";


		if(isset($_POST['aceptar'])) {

			EmpleadoController::modificarEmpleado(
				$_POST['idEmpleado'],
				$_POST['apellido'],
				$_POST['nombre'],
				$_POST['legajo'],
				$_POST['fechaIngreso'],
				$_POST['dni'],
				$_POST['cuil'],
				$_POST['fechaNacimiento'],
				$_POST['esActivo'],
				$_POST['telefono'],
				$_POST['mail'],
				$_POST['domicilio'],
				$_POST['sexo']
			);
		}

	if(isset($_POST['eliminar'])) {
		EmpleadoController::eliminarEmpleado($_GET['id']);
		header('Location: http://localhost/phcweb/views/principalView.php?page=EmpleadoView');
	}

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

									<form action="" method="POST" role="form">
										<input type="submit" name="eliminar" class="btn btn-default" value="Eliminar">
									</form>
								</div>

								<div class="pull-right">
									<form action="" method="POST" role="form">
										<button type="submit" name="modificar" class="btn btn-default" value="modificar">Modificar</button>
									</form>

								</div>
							</div>

							<div class="row">
								<form action="" method="POST" role="form" class="form-horizontal">

									<div class="form-group">
						   				<label for="idEmpleado" class="col-lg-2 control-label">id</label>
									    <div class="col-lg-5">

									    	<?php echo '<input type="text" class="form-control" name="idEmpleado" id="idEmpleado" value="'.$empleado['idEmpleado']."\" $disabled>"; ?>

									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="apellido" class="col-lg-2 control-label">Apellido</label>
									    <div class="col-lg-5">

											<?php echo '<input type="text" class="form-control" name="apellido" id="apellido" value="'.$empleado['apellido']."\" $disabled>"; ?>

									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="nombre" class="col-lg-2 control-label">Nombre</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="nombre" id="nombre" value="'.$empleado['nombre']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="legajo" class="col-lg-2 control-label">Legajo</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="legajo" id="legajo" value="'.$empleado['legajo']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="fechaIngreso" class="col-lg-2 control-label">Fecha de Ingreso</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="fechaIngreso" id="fechaIngreso" value="'.$empleado['fechaIngreso']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="dni" class="col-lg-2 control-label">DNI</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="dni" id="dni" value="'.$empleado['dni']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="cuil" class="col-lg-2 control-label">CUIL</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="cuil" id="cuil" value="'.$empleado['cuil']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="fechaNacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="'.$empleado['fechaNacimiento']."\" $disabled>"; ?>
									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="esActivo" class="col-lg-2 control-label">Activo</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="esActivo" id="esActivo" value="'.$empleado['esActivo']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="telefono" class="col-lg-2 control-label">Telefono</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="telefono" id="telefono" value="'.$empleado['telefono']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="mail" class="col-lg-2 control-label">Email</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="mail" id="mail" value="'.$empleado['email']."\" $disabled>"; ?>
									    </div>
						  			</div>


									<div class="form-group">
						   				<label for="domicilio" class="col-lg-2 control-label">Domicilio</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="domicilio" id="domicilio" value="'.$empleado['domicilio']."\" $disabled>"; ?>
									    </div>
						  			</div>


									<div class="form-group">
						   				<label for="sexo" class="col-lg-2 control-label">Sexo</label>

						   				<div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="sexo" id="sexo" value="'.$empleado['sexo']."\" $disabled>"; ?>
									    </div>
						  			</div>

									<div class="form-group">
									<label for="aceptar" class="col-lg-2 control-label"></label>
										<div class="col-lg-5">
											<?php
												if(isset($_POST['modificar'])) {
													echo "<input type=\"submit\" name=\"aceptar\" class=\"btn btn-primary pull-right\" value=\"Aceptar\">";
												}
											?>
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
