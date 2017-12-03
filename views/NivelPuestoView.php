<?php 
	
	require_once("../controllers/NivelPuestoController.php");

 ?>

<div class="container-fluid">
	
	<div class="row" id="encabezado">
		<div class="col-md-6">
			<h4>NIVELES DE PUESTO</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=NivelPuestoAltaView"  class=" btn btn-default glyphicon glyphicon-plus"></a></li>
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
						<th>Descripción</th>
						<th></th>
					</tr>
				</thead>
				<tbody>

					<?php 
						$arrayNivelPuesto = NivelPuestoController::obtenerNivelPuestos();
						foreach ($arrayNivelPuesto as $nivelPuesto) {
					?>
					<tr>
						<td><?php echo $nivelPuesto['idNivelPuesto'];?></td>
						<td><?php echo $nivelPuesto['descripcion']; ?></td>
						<td><?php echo "<a href= NivelPuestoDetalleView.php?id=".$nivelPuesto['idNivelPuesto'].">más</a>"; ?></td>
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>
</div>