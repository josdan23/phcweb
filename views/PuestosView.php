<?php 
	require_once("../controllers/PuestoController.php");
 ?>

<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-6">
			<h4>PUESTOS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=PuestosAltaView">NUEVO</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<hr>
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
					</tr>
				</thead>
				<tbody>

					<?php 
						$arrayEmpleados = PuestoController::obtenerPuestos(); 
						foreach ($arrayEmpleados as $empleado) {
							
					?>
					<tr>

						<td><?php echo "<a href= EmpleadoDetalleView.php?id=".$empleado['idPuesto'].">".$empleado['idPuesto']."</a>"; ?></td>
						<td><?php echo $empleado['nombre']; ?></td>
						<td><?php echo $empleado['descripcion']; ?></td>
						<td><?php echo $empleado['idDepartamento']; ?></td>
						<td><?php echo $empleado['idNivelPuesto']; ?></td>
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>

</div>