<?php 
	require_once("../controllers/TareaController.php");
 ?>

<div class="container-fluid">
	
	<div class="row" id="encabezado">
		<div class="col-md-6">
			<h4 id="tareas">TAREAS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=TareasAltaView"  class=" btn btn-default glyphicon glyphicon-plus"></a></li>
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
						$arrayTareas = TareaController::obtenerTareas();
						foreach ($arrayTareas as $tarea) {
					?>
					<tr>

						<td><?php echo $tarea['idTarea']; ?></td>
						<td><?php echo $tarea['descripcion']; ?></td>
                        <td><?php echo "<a href=AsignarPuestoATareaView.php?id=".$tarea['idTarea'].">Asignar Puesto</a>" ?></td>
						<td><?php echo "<a href= TareasDetalleView.php?id=".$tarea['idTarea'].">más</a>"; ?></td>
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>
</div>