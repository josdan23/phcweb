<?php 

	require_once("controllers/PuestoController.php");

 ?>

<div class="container-fluid">

	<div class="row">
		<div class="pull-right">
			<ul class="list-inline ">
				<li><a href="index.php?page=AltaPuestoView">CREAR</a></li>

			</ul>
		</div>
	</div>


	<div class="row">

		<h4>PUESTOS</h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>descripcion</th>
					<th>idDepartamento</th>
					<th>idNivelPuesto</th>
					<th></th>
					<th></th>

				</tr>
			</thead>
			<tbody>

				<?php

					$arrayPuestos = PuestoController::obtenerPuestos(); 
					foreach ($arrayPuestos as $puesto) {
				?>
					<tr>
						<td><?php echo $puesto['idPuesto'] ?></td>
						<td><?php echo $puesto['nombre'] ?></td>
						<td><?php echo $puesto['descripcion'] ?></td>
						<td><?php echo $puesto['idDepartamento'] ?></td>
						<td><?php echo $puesto['idNivelPuesto'] ?></td>
						<td><a href="index.php?page=PuestoView">modificar</span></a></td>
						<td><a href="index.php?page=PuestoView">eliminar</span></a></td>
						
					</tr>

				<?php } ?>

			</tbody>
		</table>
	</div>
</div>