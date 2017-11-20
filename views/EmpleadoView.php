<?php 

	require_once("controllers/EmpleadoController.php");

 ?>

<div class="container-fluid">

	<div class="row">
		<div class="pull-right">
			<ul class="list-inline ">
				<li><a href="index.php?page=AltaEmpleadoView">CREAR</a></li>

			</ul>
		</div>
	</div>


	<div class="row">

		<h4>EMPLEADOS</h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>apellido</th>
					<th>nombre</th>
					<th>legajo</th>
					<th>fechaIngreso</th>
					<th>dni</th>
					<th>cuil</th>
					<th>fechaNacimiento</th>
					<th>esActivo</th>
					<th>telefono</th>
					<th>email</th>
					<th>domicilio</th>
					<th>sexo</th>
					<th></th>
					<th></th>

				</tr>
			</thead>
			<tbody>

				<?php

					$arrayEmpleados = EmpleadoController::obtenerEmpleados(); 
					foreach ($arrayEmpleados as $empleado) {
				?>
					<tr>
						<td><?php echo $empleado['idEmpleado'] ?></td>
						<td><?php echo $empleado['apellido'] ?></td>
						<td><?php echo $empleado['nombre'] ?></td>
						<td><?php echo $empleado['legajo'] ?></td>
						<td><?php echo $empleado['fechaIngreso'] ?></td>
						<td><?php echo $empleado['dni'] ?></td>
						<td><?php echo $empleado['cuil'] ?></td>
						<td><?php echo $empleado['fechaNacimiento'] ?></td>
						<td><?php echo $empleado['esActivo'] ?></td>
						<td><?php echo $empleado['telefono'] ?></td>
						<td><?php echo $empleado['email'] ?></td>
						<td><?php echo $empleado['domicilio'] ?></td>
						<td><?php echo $empleado['sexo'] ?></td>

						<td><a href="index.php?page=EmpleadoView">modificar</span></a></td>
						<td><a href="index.php?page=EmpleadoView">eliminar</span></a></td>
						
					</tr>

				<?php } ?>

			</tbody>
		</table>
	</div>
</div>