<?php 

	if(isset($_POST['descripcion'])) {
		require_once("../controllers/NivelPuestoController.php");

		NivelPuestoController::agregarNivelPuesto($_POST['descripcion']);
	}
 ?>

<div class="container-fluid">

	<div class="row">

		<div class="col-md-6">
			<h4>NUEVO NIVEL DE PUESTO</h4>
		</div>
	</div>

	<div class="row">
		<hr>
	</div>

	<div class="row">

		<form action="" method="POST" role="form" class="form-horizontal"> 

			
			<div class="form-group">
   				<label for="descripcion" class="col-lg-2 control-label">Descripción</label>
			    <div class="col-lg-5">
			    	<input type="text" class="form-control" id="descripcion" name="descripcion"
			             placeholder="Descripcion del nuevo nivel del puesto">
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