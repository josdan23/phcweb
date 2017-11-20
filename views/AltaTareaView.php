<?php

	require_once("controllers/TareaController.php");

	if(isset($_REQUEST['nombre'])) {
		TareaController::agregarTarea($_REQUEST['nombre'],$_REQUEST['idTarea']);
	}
 ?>

<div class="container-fluid">

	<div class="row">
		<div class="pull-right">
			<ul class="list-inline">
				<li><a href="index.php?page=AltaTareaView">CREAR</a></li>
			</ul>
		</div>
	</div>


	<div class="row">

		<form action="" method="POST" role="form">

			<legend>Agregar nueva tarea</legend>

				<div class="form-group">
					<label for="nombre">Nombre de la tarea</label>
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Input field">
				</div>

				<button type="submit" class="btn btn-primary">ACEPTAR</button>
		</form>
	</div>
</div>
