<?php 
	
	require_once("../controllers/DepartamentoController.php");
	require_once("../controllers/NivelPuestoController.php");

	$arrayDepartamentos = DepartamentoController::obtenerDepartamentos();
	$arrayNivelPuestos = NivelPuestoController::obtenerNivelPuestos();


	if (isset($_POST['nombre']) and isset($_POST['descripcion'])) {
		require_once("../controllers/PuestoController.php");
		PuestoController::agregarPuesto($_POST['nombre'], $_POST['descripcion'], $_POST['idDepartamento'], $_POST['idNivelPuesto']);
	}
?>

<div class="container-fluid">

	<div class="row">

		<div class="col-md-6">
			<h4>NUEVO PUESTO</h4>
		</div>
	</div>

	<div class="row">
		<hr>
	</div>

	<div class="row">

		<form action="" method="POST" role="form" class="form-horizontal"> 

			
			<div class="form-group">
   				<label for="nombre" class="col-lg-2 control-label">Nombre</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="nombre" name="nombre"
			             placeholder="Nombre del Puesto">
			    </div>
  			</div>

			<div class="form-group">
   				<label for="descripcion" class="col-lg-2 control-label">Descripción</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="descripcion" name="descripcion"
			             placeholder="Descripción del Puesto">
			    </div>
  			</div>


			<div class="form-group">
   				<label for="idDepartamento" class="col-lg-2 control-label">Departamento</label>

   				<div class="col-lg-5">
			    	<select class="form-control" name="idDepartamento">
						<?php 

							foreach ($arrayDepartamentos as $departamento) {
								echo "<option value=".$departamento['idDepartamento'].">".$departamento['nombre']."</option>";
							}
						?>
					</select>
			    </div>
  			</div>

  			<div class="form-group">
   				<label for="nivelPuesto" class="col-lg-2 control-label">Nivel de Puesto</label>

   				<div class="col-lg-5">
			    	<select class="form-control" name="idNivelPuesto">
						<?php 

							foreach ($arrayNivelPuestos as $nivelPuesto) {
								echo "<option value=".$nivelPuesto['idNivelPuesto'].">".$nivelPuesto['descripcion']."</option>";
							}
						?>
					</select>
			    </div>
  			</div>

  			<div class="form-group">
  				<div class="col-lg-offset-2 col-lg-5">
  					
					<button type="submit" class="btn btn-primary">ACEPTAR</button>
  				</div>	
  			</div>

		</form>

	</div>
</div>
