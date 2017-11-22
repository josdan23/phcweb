<?php 

	require_once("controllers/TareaController.php");

 ?>

<div class="container-fluid">

	<div class="row">
		<div class="pull-right">
			<ul class="list-inline ">
				<li><a href="index.php?page=AltaTareaView">CREAR</a></li>

			</ul>
		</div>
	</div>


	<div class="row">

		<h4>PUESTOS</h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>descripcion</th>
					<th></th>
					<th></th>

				</tr>
			</thead>
			<tbody>

				<?php

					$arrayTareas = TareaController::obtenerTareas(); 
					foreach ($arrayTareas as $tarea) {
				?>
					<tr>
						<td><?php echo $tarea['idTarea'] ?></td>
						<td><?php echo $tarea['descripcion'] ?></td>
						<td><a href="index.php?page=TareaView">modificar</span></a></td>
						<td><a href="index.php?page=TareaView">eliminar</span></a></td>
						
					</tr>

				<?php } ?>

			</tbody>
		</table>
	</div>
</div>