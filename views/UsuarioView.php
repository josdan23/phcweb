<?php 
	
	require("../controllers/UsuarioController.php");
	
?>

<div class="container-fluid">
	
	<div class="row" id="encabezado">
		<div class="col-md-6">
			<h4 id="usuarios">USUARIOS</h4>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<ul class="list-inline ">
					<li><a href="principalView.php?page=UsuarioAltaView"  class=" btn btn-default glyphicon glyphicon-plus"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		
		<div class="panel panel-default">
		
			<table class="table table-striped">
				<thead>

					<tr>
						<th>ID</th>
						<th>Nombre de Usuario</th>
						<th>Contrasenia</th>
						<th>Administrador</th>
						<th>Habilitado</th>
						<th>Contrasenia Restaurada</th>
						<th></th>
						
					</tr>
				</thead>
				<tbody>

					<?php 
						$arrayUsuarios = UsuarioController::obtenerUsuarios(); 
						foreach ($arrayUsuarios as $usuario) {
							
					?>
					<tr>

						<td><?php echo $usuario['idEmpleado']; ?></td>
						<td><?php echo $usuario['nombreUsuario']; ?></td>
						<td><?php echo $usuario['contrasenia']; ?></td>
						<td><?php echo $usuario['esAdministrador']; ?></td>
						<td><?php echo $usuario['habilitado']; ?></td>
						<td><?php echo $usuario['contraseniaRestaurada']; ?></td>
						<td><?php echo "<a href=UsuarioDetalleView.php?id=".$usuario['idEmpleado'].">más</a>" ?></td>
					</tr>

					<?php } ?>
				</tbody>
				
			</table>
		</div>

	</div>
</div>