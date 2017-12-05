<?php
	include ("../controllers/UsuarioController.php");

	
	

	function validar($user, $pass) {

		$flags = 0;
		$arrayUsuarios = UsuarioController::obtenerUsuarios();
		foreach ($arrayUsuarios as $usuario) {
			if ($usuario['nombreUsuario'] == $user) {
				if ($usuario['contrasenia'] == md5($pass)) {
					if ($usuario['esAdministrador'] == 1) {
						if ($usuario['habilitado'] == 1) {
							$flags = 1;
						}
					}
				}
			}
		}

		if($flags == 1) {
			header("Location:http://localhost/phcweb/views/principalView.php");
		}
		
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
		<link rel="stylesheet" href="../views/assets/css/style.css">
	</head>
	<body style="background-image: url(../views/assets/resources/fondo1.jpg); background-repeat: no-repeat, no-repeat; background-size: cover;">

		<!--HEADER-->
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-4 col-md-offset-4">

					<div class="row">
						<h1 id="login-encabezado">Program for Human Capital</h1>
						<h4 id="login-encabezado">Sistema de gestión de capital humano</h4>
						<br>
						<br>
					</div>

					<div class="row">
						<div class="col-md-8 col-md-offset-2">

							<h4 id="login-encabezado">Iniciar Sesión</h4>
							
							<div class="panel panel-default panel-body">

								<form action="" method="POST" role="form">
								
									<div class="form-group">
										<label for="">Usuario</label>
										<input type="text" class="form-control" id="usuario" name="usuario" placeholder="">
									</div>

									<div class="form-group">
										<label for="">Contraseña</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="">
									</div>
								
									<button type="submit" class="btn btn-primary btn-block">INICIAR</button>
								</form>


								<div class="row" id="info">
									<?php
										$user = $_POST['usuario'];
										$pass = $_POST['password'];

										validar($user, $pass);
									?>
								</div>
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