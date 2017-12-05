<?php 
	require_once("../controllers/RequerimientoController.php");
 ?>

<div class="container-fluid">
	
	<div class="row" id="encabezado">
		<div class="col-md-6">
			<h4 id="requerimientos">REQUERIMIENTOS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=RequerimientoAltaView"  class=" btn btn-default glyphicon glyphicon-plus"></a></li>
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
						<th></th>
					</tr>
				</thead>
				<tbody>

					<?php
						$arrayRequerimientos = RequerimientoController::obtenerRequerimientos();
						foreach ($arrayRequerimientos as $requerimiento) {

					?>
					<tr>

						<td><?php echo $requerimiento['idRequerimiento']; ?></td>
						<td><?php echo $requerimiento['descripcion']; ?></td>
						<td><?php echo "<a href=AsignarPuestoARequerimientoView.php?id=".$requerimiento['idRequerimiento'].">Asignar Puesto</a>" ?></td>
						<td><?php echo "<a href= RequerimientoDetalleView.php?id=".$requerimiento['idRequerimiento']."> más</a>"; ?></td>

					</tr>

					<?php } ?>
				</tbody>

			</table>
		</div>
	</div>
</div>
