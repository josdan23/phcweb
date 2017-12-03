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
						<td><?php echo "<a href= RequerimientoDetalleView.php?id=".$requerimiento['idRequerimiento']."> más</a>"; ?></td>

					</tr>

					<?php } ?>
				</tbody>

			</table>
		</div>
	</div>
</div>
