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
					<li><a href="principalView.php?page=NivelDepartamentoAltaView"  class=" btn btn-default glyphicon glyphicon-plus"></a></li>
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
						$arrayNivelDepartamento = NivelDepartamentoController::obtenerNivelDepartamentos();
						foreach ($arrayNivelDepartamento as $nivelDepartamento) {
							
					?>
					<tr>

						<td><?php echo $nivelDepartamento['idNivelDepartamento']; ?></td>
						<td><?php echo $nivelDepartamento['nombre']; ?></td>
						<td><?php echo "<a href= NivelDepartamentoDetalleView.php?id=".$nivelDepartamento['idNivelDepartamento'].">más</a>"; ?></td>
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>
</div>