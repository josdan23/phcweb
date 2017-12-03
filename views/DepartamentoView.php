<?php 

	require_once("../controllers/DepartamentoController.php");

 ?>

<div class="container-fluid">	 
	<div class="row">

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
		<hr>
	</div>


	<div class="row">

		<div class="panel panel-default">
			
			<table class="table table-striped">
				<thead>
					<tr>
						<th>id</th>
						<th>nombre</th>
						<th></th>
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
							<td><a href="index.php?page=DepartamentoView">modificar</span></a></td>
							<td><a href="index.php?page=DepartamentoView">eliminar</span></a></td>
						</tr>

					<?php } ?>

				</tbody>
			</table>
		</div>			
	</div>
</div>