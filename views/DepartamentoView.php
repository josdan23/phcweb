<?php 

	require_once("controllers/DepartamentoController.php");

 ?>

<div class="container-fluid">

	<div class="row">
		<div class="pull-right">
			<ul class="list-inline ">
				<li><a href="index.php?page=AltaDepartamentoView">CREAR</a></li>

			</ul>
		</div>
	</div>


	<div class="row">

		<h4>DEPARTAMENTOS</h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th></th>
					<th></th>

				</tr>
			</thead>
			<tbody>

				<?php

					$arrayDepartamentos = DepartamentoController::obtenerDepartamentos(); 
					foreach ($arrayDepartamentos as $departamento) {
				?>
					<tr>
						<td><?php echo $departamento['idDepartamento'] ?></td>
						<td><?php echo $departamento['nombre'] ?></td>
						<td><a href="index.php?page=DepartamentoView">modificar</span></a></td>
						<td><a href="index.php?page=DepartamentoView">eliminar</span></a></td>
						
					</tr>

				<?php } ?>

			</tbody>
		</table>
	</div>
</div>