<?php 
	require_once("../controllers/NivelDepartamentoController.php");
 ?>

<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-6">
			<h4>NIVELES DE DEPARTAMENTOS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=NivelDepartamentoAltaView">NUEVO</a></li>
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
					</tr>
				</thead>
				<tbody>

					<?php 
						$arrayEmpleados = NivelDepartamentoController::obtenerNivelDepartamentos();
						foreach ($arrayEmpleados as $empleado) {
							
					?>
					<tr>

						<td><?php echo "<a href= EmpleadoDetalleView.php?id=".$empleado['idNivelDepartamento'].">".$empleado['idNivelDepartamento']."</a>"; ?></td>
						<td><?php echo $empleado['nombre']; ?></td>
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>
</div>