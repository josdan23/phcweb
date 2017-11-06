<?php 

	require_once("../controllers/DepartamentoController.php");

	if(isset($_POST['nombre'])) {
		
		DepartamentoController::agregarDepartamento($_POST['nombre']);
	}else
		echo "error al cargar Departamento";

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
	</head>
	<body>
		<h2>Agregar Departamentos</h2>

		<div class="container-fluid">
			<div class="row">
				<form action="" method="POST" role="form" class="col-md-4 col-md-offset-1">

					<legend>Form title</legend>
				
					<div class="form-group">
						<label for="nombre">label</label>
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Input field">
					</div>
				
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>


		<?php 

			var_dump(DepartamentoController::obtenerDepartamentos());

		 ?>

		<div class="container-fluid">
			<div class="row">
				hola
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<<form action="DepartamentoView_submit" method="get" accept-charset="utf-8">
			
		</form>


	</body>
</html>