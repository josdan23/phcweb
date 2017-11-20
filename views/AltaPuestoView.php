<?php

	require_once("controllers/PuestoController.php");

	if(isset($_REQUEST['nombre'])) {
		PuestoController::agregarPuesto($_REQUEST['nombre'],$_REQUEST['idPuesto']);
	}
 ?>

<div class="container-fluid">

	<div class="row">
		<div class="pull-right">
			<ul class="list-inline">
				<li><a href="index.php?page=AltaPuestoView">CREAR</a></li>
			</ul>
		</div>
	</div>


	<div class="row">

		<form action="" method="POST" role="form">

			<legend>Agregar nuevo puesto</legend>

				<div class="form-group">
					<label for="nombre">Nombre del puesto</label>
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Input field">
				</div>

				<button type="submit" class="btn btn-primary">ACEPTAR</button>
		</form>
	</div>
</div>
