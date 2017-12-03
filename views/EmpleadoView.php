<?php

	require_once("../controllers/EmpleadoController.php");

 ?>

<div class="container-fluid">

	<div class="row">
		<div class="col-md-6">
			<h4>EMPLEADOS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=EmpleadoAltaView"  class=" btn btn-default glyphicon glyphicon-plus"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<hr>
	</div>
	<div class="row">

		<div class="panel panel-default">

			<table class="table table-striped">
				<thead>

					<tr>
						<th>id</th>
						<th>Apellido</th>
						<th>Nombre</th>
						<th>Legajo</th>
						<th>F. ingreso</th>
						<th>Activo</th>
						<th>Tel</th>
						<th>Email</th>

					</tr>
				</thead>
				<tbody>

					<?php
						$arrayEmpleados = EmpleadoController::obtenerEmpleados();
						foreach ($arrayEmpleados as $empleado) {

					?>
					<tr>

						<td><?php echo $empleado['idEmpleado']; ?></td>
						<td><?php echo $empleado['apellido']; ?></td>
						<td><?php echo $empleado['nombre']; ?></td>
						<td><?php echo $empleado['legajo']; ?></td>
						<td><?php echo $empleado['fechaIngreso']; ?></td>
						<td><?php echo $empleado['esActivo']; ?></td>
						<td><?php echo $empleado['telefono']; ?></td>
						<td><?php echo $empleado['email']; ?></td>
						<td><?php echo "<a href=AsignarPuestoAEmpleadoView.php?id=".$empleado['idEmpleado'].">Asignar Puesto</a>" ?></td>
						<td><?php echo "<a href=EmpleadoDetalleView.php?id=".$empleado['idEmpleado'].">más</a>" ?></td>
					</tr>

					<?php } ?>
				</tbody>

			</table>
		</div>

	</div>
</div>
