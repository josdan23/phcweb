<?php

	require_once("controllers/EmpleadoController.php");

	if(isset($_REQUEST['nombre'])) {
		EmpleadoController::agregarEmpleado($_REQUEST['nombre'],$_REQUEST['apellido']);
	}
 ?>

<div class="container-fluid">

	<div class="row">
		<div class="pull-right">
			<ul class="list-inline">
				<li><a href="index.php?page=AltaEmpleadoView">CREAR</a></li>
			</ul>
		</div>
	</div>


	<div class="row">

		<form action="" method="POST" role="form">

			<legend>Agregar nuevo empleado</legend>

				<div class="form-group">
					<label for="nombre">Nombre del empleado</label>
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Input field">
				</div>

				<button type="submit" class="btn btn-primary">ACEPTAR</button>
		</form>
	</div>
</div>
