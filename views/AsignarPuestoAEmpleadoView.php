<?php

	require_once("../controllers/EmpleadoController.php");
  require_once("../controllers/PuestoController.php");

	$empleado = EmpleadoController::obtenerUnEmpleado($_GET['id']);

		if(isset($_POST['aceptar'])) {
      $entidad = new EntidadBase();
      $arrayPuestos = PuestoController::obtenerPuestos();

      foreach ($arrayPuestos as $Puesto ) {
        $id = $Puesto['idPuesto'];
              if(IsChecked('checkbox',$id)){
                $idEmpleado = $empleado['idEmpleado'];
                $entidad->asignarPuestoAEmpleado($id,$idEmpleado);
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
		<title>Asignar Puesto a Empleado</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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
              			<h4>EMPLEADO</h4>
              		</div>

              	</div>
							<div class="row">
								<form action="" method="POST" role="form" class="form-horizontal">

									<div class="form-group">
						   				<label for="idEmpleado" class="col-lg-2 control-label">id</label>
									    <div class="col-lg-5">

									    	<?php echo '<input type="text" class="form-control" name="idEmpleado" id="idEmpleado" value="'.$empleado['idEmpleado']."\" $disabled>"; ?>

									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="apellido" class="col-lg-2 control-label">Apellido</label>
									    <div class="col-lg-5">

											<?php echo '<input type="text" class="form-control" name="apellido" id="apellido" value="'.$empleado['apellido']."\" $disabled>"; ?>

									    </div>
						  			</div>

									<div class="form-group">
						   				<label for="nombre" class="col-lg-2 control-label">Nombre</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="nombre" id="nombre" value="'.$empleado['nombre']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="legajo" class="col-lg-2 control-label">Legajo</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="legajo" id="legajo" value="'.$empleado['legajo']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="fechaIngreso" class="col-lg-2 control-label">Fecha de Ingreso</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="fechaIngreso" id="fechaIngreso" value="'.$empleado['fechaIngreso']."\" $disabled>"; ?>
									    </div>
						  			</div>

						  			<div class="form-group">
						   				<label for="dni" class="col-lg-2 control-label">DNI</label>
									    <div class="col-lg-5">
									    	<?php echo '<input type="text" class="form-control" name="dni" id="dni" value="'.$empleado['dni']."\" $disabled>"; ?>
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
                      <h4>Seleccione los puestos a los que pertenece el Empleado</h4>
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
