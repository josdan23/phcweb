<?php 

	require("../controllers/EmpleadoController.php");
	require("../controllers/UsuarioController.php");

	$arrayEmpleados = EmpleadoController::obtenerEmpleados();

	if (isset($_POST['nombreUsuario'])) {
		
		UsuarioController::agregarUsuario(
			$_POST['idEmpleado'],
			$_POST['nombreUsuario'],
			$_POST['contrasenia'],
			$_POST['esAdministrador'],
			$_POST['habilitado'],
			0
		);
	}
 ?>


<div class="container-fluid">

	<div class="row">

		<div class="col-md-6">
			<h4>NUEVO USUARIO</h4>
		</div>
	</div>

	<div class="row">
		<hr>
	</div>

	<div class="row">

		<form action="" method="POST" role="form" class="form-horizontal"> 


			<div class="form-group">
   				<label for="nombreUsuario" class="col-lg-2 control-label">Nombre de Usuario</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario"
			             placeholder="Nombre del usuario">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="contrasenia" class="col-lg-2 control-label">Contrasenia</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="contrasenia" name="contrasenia"
			             placeholder="Contrasenia del empleado">
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="esAdministrador" class="col-lg-2 control-label">Es Administrador</label>
			    <div class="col-lg-5">
			    	<select class="form-control" name="esAdministrador" >
						<option value="0">No</option>
						<option value="1">Si</option>
					</select>
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="habilitado" class="col-lg-2 control-label">Habilitado</label>
			    <div class="col-lg-5">
			    	<select class="form-control" name="habilitado" >
						<option value="0">No</option>
						<option value="1">Si</option>
					</select>
			    </div>
  			</div>

			<div class="form-group">
				<label for="Empleado" class="col-lg-2 control-label">Empleado</label>
				<div class="col-lg-5">					
					<?php 
						echo '<select class="form-control" name="idEmpleado" id"idEmpleado">';

						foreach ($arrayEmpleados as $empleados) {
							echo "<option value=".$empleados['idEmpleado'].">".$empleados['apellido']." ".$empleados['nombre']."</option>";
						}
					?>
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
