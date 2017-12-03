<?php 

	require_once("../controllers/DepartamentoController.php");

 ?>

<div class="container-fluid">	 
	<div class="row" id="encabezado">

		<div class="col-md-6">
			<h4>DEPARTAMENTOS</h4>
		</div>

		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=DepartamentoAltaView"  class=" btn btn-default glyphicon glyphicon-plus"></a></li>
				</ul>
			</div>
		</div>	
	</div>

	<div class="row">

		<div class="panel panel-default">
			
			<table class="table table-striped">
				<thead>
					<tr>
						<th>id</th>
						<th>Nombre</th>
						<th>Nivel de Departamento</th>
						<th></th>
					</tr>
				</thead>
				<tbody>

					<?php

						$arrayDepartamentos = DepartamentoController::obtenerDepartamentos(); 
						foreach ($arrayDepartamentos as $departamento) {
					?>
						<tr>
							<td><?php echo $departamento['idDepartamento'] ?></td>
							<td><?php echo $departamento['nombre'] ?></td>
							<td><?php echo $departamento['nombreNivel']?></td>
							<td><?php echo "<a href= DepartamentoDetalleView.php?id=".$departamento['idNivelDepartamento'].">más</a>"; ?></td>
						</tr>

					<?php } ?>

				</tbody>
			</table>
		</div>			
	</div>
</div>