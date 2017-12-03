<?php 

	require_once("../controllers/RequerimientoController.php");

	$requerimiento = RequerimientoController::obtenerUnRequerimiento($_GET['id']);

	$disabled = "disabled";
	if(isset($_POST['modificar']))
		$disabled = "null";


	if(isset($_POST['aceptar'])) {
        RequerimientoController::modificarRequerimiento(
            $_GET['id'],
            $_POST['descripcion']
        );
        
	}

	if(isset($_POST['eliminar'])) {

        RequerimientoController::eliminarRequerimiento(
            $_GET['id']
        );
        header("Location:http://localhost/phcweb/views/principalView.php?page=RequerimientosView");
    }

 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="pull-right">
                                        <form action="" method="POST" role="form">
											<button type="submit" name="modificar" class="btn btn-default" value="modificar">Modificar</button>
											<button type="submit" name="eliminar" class="btn btn-default" value="Eliminar">Eliminar</button>
                                        </form>
                                    </div>

                                </div>
							</div>

							<div class="row">
								<form action="" method="POST" role="form" class="form-horizontal"> 
                                        
                                    <div class="form-group">
                                        <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                                        <div class="col-lg-5">
                                            <?php echo "<input type=\"text\" class=\"form-control\" id=\"descripcion\" name=\"descripcion\" value=\"".$requerimiento['descripcion']."\"$disabled>"; ?>                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <?php 
                                                if(isset($_POST['modificar']))
                                                    echo "<button type=\"submit\" name=\"aceptar\" class=\"btn btn-primary pull-right\">ACEPTAR</button>";
                                            ?>
                                        </div>	
                                    </div>
								
								</form>
							</div>
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
