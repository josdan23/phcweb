<?php
	require_once("../controllers/PuestoController.php");
 ?>

<div class="container-fluid">
	
	<div class="row" id="encabezado">
		<div class="col-md-6">
			<h4 id="puestos">PUESTOS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=PuestosAltaView" class=" btn btn-default glyphicon glyphicon-plus"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="panel panel-default">

			<table class="table">
				<thead>

					<tr>
						<th>id</th>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Departamento</th>
						<th>Nivel del Puesto</th>
						<th colspan="4">Seleccione</th>
						
						
						
					</tr>
				</thead>
				<tbody>

					<?php
						$arrayPuestos = PuestoController::obtenerPuestos();
						foreach ($arrayPuestos as $puesto) {
					?>
					<tr>

						<td><?php echo $puesto['idPuesto'];?></td>
						<td><?php echo $puesto['nombre']; ?></td>
						<td><?php echo $puesto['descripcion']; ?></td>

						<td><?php echo $puesto['nombreDepartamento']; ?></td>
						<td><?php echo $puesto['nombreNivelDepartamento']; ?></td>
						<td><?php echo "<a href=AsignarEmpleadoAPuestoView.php?id=".$puesto['idPuesto'].">Asignar Empleados</a>" ?></td>
						<td><?php echo "<a href=AsignarRequerimientoAPuestoView.php?id=".$puesto['idPuesto'].">Asignar Requerimientos</a>" ?></td>
                        <td><?php echo "<a href=AsignarTareaAPuestoView.php?id=".$puesto['idPuesto'].">Asignar Tareas</a>" ?></td>
						<td><?php echo "<a href=PuestoDetalleView.php?id=".$puesto['idPuesto'].">más</a>" ?></td>
					</tr>

					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>

</div>
