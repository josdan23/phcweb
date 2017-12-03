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
					<li><a href="principalView.php?page=PuestosAltaView" class=" btn btn-default glyphicon glyphicon-plus"></a></li>
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
						<th></th>
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
						<td><?php echo $puesto['descripcionNivelPuesto']; ?></td>
						<td><?php echo "<a href=PuestoDetalleView.php?id=".$puesto['idPuesto'].">más</a>" ?></td>
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>

</div>