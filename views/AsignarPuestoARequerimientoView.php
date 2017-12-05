<?php
	require_once("../controllers/RequerimientoController.php");
  	require_once("../controllers/PuestoController.php");

	$disabled = "disabled";

	$requerimiento = RequerimientoController::obtenerUnRequerimiento($_GET['id']);

	if(isset($_POST['aceptar'])) {
    	$arrayPuestos = PuestoController::obtenerPuestos();

    	foreach ($arrayPuestos as $puesto ) {
        	$id = $puesto['idPuesto'];
            if(IsChecked('checkbox',$id)){
            	$idRequerimiento = $requerimiento['idRequerimiento'];
				RequerimientoController::asignarRequerimientoAPuesto($idRequerimiento, $id);
            }
      }
  }

  function IsChecked($chkname,$value){
    	if(!empty($_POST[$chkname])) {
        	foreach($_POST[$chkname] as $chkval) {
            	if($chkval == $value) {
                	return true;
            	}
        	}
    	}
    return false;
}

 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Asignar Puesto a Requerimiento</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="../views/assets/css/style.css">

	</head>
	<body>

		<!--HEADER-->
		<div class="container-fluid">

			<div class="row">


			<?php
				include_once("navbar.php");
			?>
			</div>



			<div class="row">

				<!--para el panel -->
				<div class="col-md-2">
					<?php include("panelIzquierda.php"); ?>
				</div>


				<!--para el cuerpo-->
				<div class="col-md-10">

						<div class="panel panel-default panel-body">

							<div class="container-fluid">



                <div class="row">
              		<div class="col-md-6">
              			<h4>REQUERIMIENTO</h4>
              		</div>

              	</div>
							<div class="row">
								<form action="" method="POST" role="form" class="form-horizontal">

									<div class="form-group">
						   				<label for="idRequerimiento" class="col-lg-2 control-label">id</label>
									    <div class="col-lg-5">

									    	<?php echo '<input type="text" class="form-control" name="idRequerimiento" id="idRequerimiento" value="'.$requerimiento['idRequerimiento']."\" $disabled>"; ?>

									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
									    <div class="col-lg-5">

											<?php echo '<input type="text" class="form-control" name="descripcion" id="descripcion" value="'.$requerimiento['descripcion']."\" $disabled>"; ?>

									    </div>
						  			</div>

									



								</form>
							</div>
						</div>
            <div class="container-fluid">


            	<div class="row">
            		<hr>
            	</div>
            	<div class="row">

            		<div class="panel panel-default">

                  <div class="row">
                    <div class="col-md-6">
                      <h4>Seleccione los puestos a los que pertenece el Requerimiento</h4>
                    </div>

                  </div>
            			<table class="table table-striped">
            				<thead>

            					<tr>

            						<th>Nombre</th>
            						<th>Descripcion</th>
                        <th>Seleccionar</th>


            					</tr>
            				</thead>
            				<tbody>
                    <form method="post">
            					<?php


            						$arrayPuestos = PuestoController::obtenerPuestos();
            						foreach ($arrayPuestos as $puesto) {

            					?>
            					<tr>


            						<td><?php echo $puesto['nombre']; ?></td>
            						<td><?php echo $puesto['descripcion']; ?></td>
                        <?php $id=$puesto['idPuesto']; ?>
                        <td><?php echo "<input type=\"checkbox\" name=\"checkbox[]\" value=$id > " ?></td>


            					</tr>

            					<?php }

                      ?>


            				</tbody>

            			</table>




            	</div>

              <div class="form-group">
              <label for="aceptar" class="col-lg-2 control-label"></label>
                <div class="col-lg-offset-2 col-lg-5">
                  <?php

                      echo "<input type=\"submit\" name=\"aceptar\" class=\"btn btn-primary pull-right\" value=\"Aceptar\">";

                  ?>
                  </div>
              </div>
            </form>
            </div>
					</div>

				</div>

			</div>

		</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
</html>
