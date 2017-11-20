<?php

	require_once("../controllers/DepartamentoController.php");

	if(isset($_REQUEST['nombre'])) {
		DepartamentoController::agregarDepartamento($_REQUEST['nombre'],$_REQUEST['idNivelDepartamento']);
	}
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
   				<label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
			    <div class="col-lg-5">
			    	<input type="email" class="form-control" id="ejemplo_email_3"
			             placeholder="Nombre del departamento">
			    </div>
  			</div>
	
			
			<div class="form-group">
   				<label for="ejemplo_email_3" class="col-lg-2 control-label">Nivel de Departamento</label>

   				<div class="col-lg-5">
			    	<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
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
