<?php 
	require_once("../controllers/RequerimientoController.php");
 ?>

<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-6">
			<h4>REQUERIMIENTOS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=RequerimientoAltaView">NUEVO</a></li>
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
						<th>Descripción</th>
					</tr>
				</thead>
				<tbody>

					<?php 
						$arrayEmpleados = RequerimientoController::obtenerRequerimientos();
						foreach ($arrayEmpleados as $empleado) {
							
					?>
					<tr>

						<td><?php echo "<a href= EmpleadoDetalleView.php?id=".$empleado['idRequerimiento'].">".$empleado['idRequerimiento']."</a>"; ?></td>
						<td><?php echo $empleado['descripcion']; ?></td>
		
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>
</div>