<?php

	require_once("../controllers/EmpleadoController.php");
  require_once("../controllers/PuestoController.php");

	$disabled = "disabled";
	$puesto = PuestoController::obtenerUnPuesto($_GET['id']);

		if(isset($_POST['aceptar'])) {
      $arrayEmpleados = EmpleadoController::obtenerEmpleados();

      foreach ($arrayEmpleados as $empleado ) {
        $id = $empleado['idEmpleado'];
              if(IsChecked('checkbox',$id)){
								$idPuesto = $puesto['idPuesto'];
								
								EmpleadoController::asignarPuestoAEmpleado($idPuesto, $id);
              }
      }


  }

  function IsChecked($chkname,$value){
    if(!empty($_POST[$chkname]))
    {
        foreach($_POST[$chkname] as $chkval)
        {
            if($chkval == $value)
            {
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
		<title>Asignar Empleados a un Puesto</title>

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
              			<h4>PUESTO</h4>
              		</div>

              	</div>
							<div class="row">
								<form action="" method="POST" role="form" class="form-horizontal">

									<div class="form-group">
						   				<label for="idPuesto" class="col-lg-2 control-label">id</label>
									    <div class="col-lg-5">

									    	<?php echo '<input type="text" class="form-control" name="idPuesto" id="idPuesto" value="'.$puesto['idPuesto']."\" $disabled>"; ?>

									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="nombre" class="col-lg-2 control-label">Nombre</label>
									    <div class="col-lg-5">

											<?php echo '<input type="text" class="form-control" name="nombre" id="nombre" value="'.$puesto['nombre']."\" $disabled>"; ?>

									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="descripcion" id="descripcion" value="'.$puesto['descripcion']."\" $disabled>"; ?>
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
                      <h4>Seleccione los Empleados que trabajan en este Puesto</h4>
                    </div>

                  </div>
            			<table class="table table-striped">
            				<thead>

            					<tr>
												<th>Id</th>
            						<th>Nombre</th>
            						<th>Apellido</th>
                        <th>Seleccionar</th>


            					</tr>
            				</thead>
            				<tbody>
                    <form method="post">
            					<?php


            						$arrayEmpleados = EmpleadoController::obtenerEmpleados();
            						foreach ($arrayEmpleados as $empleado) {

            					?>
            					<tr>

												<td><?php echo $empleado['idEmpleado']; ?></td>
            						<td><?php echo $empleado['nombre']; ?></td>
            						<td><?php echo $empleado['apellido']; ?></td>
                        <?php $id=$empleado['idEmpleado']; ?>
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
