<?php
	
	if(isset($_POST['nombre'])) {
		require_once("../controllers/DepartamentoController.php");

		DepartamentoController::agregarDepartamento($_POST['nombre'], $_POST['nivelDepartamento']);	
	}


	require_once("../controllers/NivelDepartamentoController.php");


	$array = NivelDepartamentoController::obtenerNivelDepartamentos();
	 ?>

<div class="container-fluid">

	<div class="row">
	
		<div class="col-md-6">
			<h4>AGREGAR DEPARTAMENTOS</h4>
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
			             placeholder="Nombre del departamento">
			    </div>
  			</div>
	
			
			<div class="form-group">
   				<label for="ejemplo_email_3" class="col-lg-2 control-label">Nivel del Departamento</label>

   				<div class="col-lg-5">
			    	<select class="form-control" name="nivelDepartamento"> 
						
						<?php 
						foreach ($array as $valor) {
						 	echo "<option value=".$valor[0].">$valor[1]</option>";
						 } ?>

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
