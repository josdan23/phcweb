<?php
    include ("../controllers/PuestoController.php");
    include ("../controllers/NivelPuestoController.php");
    include ("../controllers/DepartamentoController.php");

    $puesto = PuestoController::obtenerUnPuesto($_GET['id']);
    $arrayNivelPuestos = NivelPuestoController::obtenerNivelPuestos();
    $arrayDepartamentos = DepartamentoController::obtenerDepartamentos();

    if(isset($_POST['eliminar'])) {
        PuestoController::eliminarPuesto($_GET['id']);
        header("Location:http://localhost/phcweb/views/principalView.php?page=PuestosView");
    }

    $disabled = "disabled";
    if (isset($_POST['modificar'])) {
        $disabled = "null";
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
								<div class="pull-right">

									<form action="" method="POST" role="form">
										<input type="submit" name="eliminar" class="btn btn-default" value="Eliminar">
									</form>
								</div>

								<div class="pull-right">
									<form action="" method="POST" role="form">
										<button type="submit" name="modificar" class="btn btn-default" value="modificar">Modificar</button>
									</form>

								</div>
							</div>

							<div class="row">
								<form action="" method="POST" role="form" class="form-horizontal"> 
									

                                    <div class="form-group">
                                        <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                                        <div class="col-lg-5">
                                            <?php echo "<input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\"
                                                placeholder=\"Nombre del Puesto\" value=\"".$puesto['nombre']."\"$disabled>"; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                                        <div class="col-lg-5">
                                            <?php echo "<input type=\"text\" class=\"form-control\" id=\"descripcion\" name=\"descripcion\"
                                        placeholder=\"descripcion del Puesto\" value=\"".$puesto['descripcion']."\"$disabled>"; ?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="idDepartamento" class="col-lg-2 control-label">Departamento</label>

                                        <div class="col-lg-5">
                                           
                                                <?php 

                                                    echo "<select class=\"form-control\" name=\"idNivelPuesto\" $disabled>";
                                                    if($disabled != "null") {
                                                        echo "<option>".$puesto['idDepartamento']."</option>";
                                                    }
                                                    else {
                                                        foreach ($arrayDepartamentos as $departamento) {
                                                            echo "<option value=".$departamento['idDepartamento'].">".$departamento['nombre']."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nivelPuesto" class="col-lg-2 control-label">Nivel de Puesto</label>

                                        <div class="col-lg-5">
                                            
                                                <?php 
                                                    echo "<select class=\"form-control\" name=\"idNivelPuesto\" $disabled>";
                                                    if($disabled != "null") {
                                                        echo "<option>".$puesto['idNivelPuesto']."</option>";
                                                    }
                                                    else {
                                                        foreach ($arrayNivelPuestos as $nivelPuesto) {
                                                            echo "<option value=".$nivelPuesto['idNivelPuesto'].">".$nivelPuesto['descripcion']."</option>";
                                                        }
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