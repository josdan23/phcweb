<?php

require_once("ConectarMysql.php");

class EntidadBase {

	private $conexion;
	private $tabla;
	private $db;

	public function __construct($tabla) {
		$this->tabla = $tabla;
		$this->conexion = ConectarMysql::getInstance();

		$this->db = $this->conexion->conectar();
	}


	public function obtenerTodos() {

		$resultSet = array();

		$registros = mysqli_query($this->db,"select * from $this->tabla") or die("Problemas en el select:".mysqli_error($this->db));

		while ($row=mysqli_fetch_array($registros)) {
				$resultSet[] = $row;
			}

		$this->conexion->cerrarConexion($this->db);
		return $resultSet;
	}

	public function obtenerPorId($id) {
		$resultSet = array();


		$query = "select * from $this->tabla where id$this->tabla = ?";
		$sentencia = $this->db->prepare($query);
		$sentencia->bind_param('s', $id);
		$sentencia->execute();
		$registros = $sentencia->get_result();

		while ($row=mysqli_fetch_array($registros)) {
				$resultSet[] = $row;
			}

		$this->conexion->cerrarConexion($this->db);
		return $resultSet;
	}


	public function borrarPorId($id) {
		$resultSet = array();


		$query = "delete from $this->tabla where id$this->tabla = ?";
		$sentencia = $this->db->prepare($query);
		$sentencia->bind_param('s', $id);
		$sentencia->execute();
		$registros = $sentencia->get_result();

		echo "borrado";

		$this->conexion->cerrarConexion($this->db);
	}

	public function guardarDepartamento($departamento){
		$nombreDepartamento = $departamento->getNombre();
		$idNivelDepartamento = $departamento->getIdNivelDepartamento();
		$query="insert into $this->tabla (nombre,idNivelDepartamento) values('$nombreDepartamento',$idNivelDepartamento)";

		//echo "$query <br>";
		try {
			//echo "Entro al try <br>";
			if($this->db->query($query)==true)
			echo "Se registro el departamento con exito <br>";
			else {
				echo "No se Registro el Departamento";
			}

		} catch (Exception $e) {
			echo "$e";
		}
	}

		public function guardarEmpleado($apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo){
			$query = "insert into $this->tabla (apellido,nombre,legajo,fechaIngreso,dni,cuil,fechaNacimiento,esActivo,telefono,email,domicilio,sexo)
			values ('$apellido','$nombre',$legajo,'$fechaIngreso',$dni,'$cuil','$fechaNacimiento',$esActivo,$telefono,'$email','$domicilio','$sexo')";

			//echo "$query";
			try {
				if($this->db->query($query)==true)
				echo "Se registro el empleado con exito <br>";
				else {
					echo "No se registro el Empleado";
				}
			} catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
				echo "$e";
			}

		}

		public function guardarNivelDepartamento($nombre){
			$query = "insert into $this->tabla (nombre) values ('$nombre')";

			try {
				if($this->db->query($query)==true)
				echo "Se registro el NivelDepartamento con exito <br>";
				else {
					echo "No se registro el NivelDepartamento";
				}
			} catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
				echo "$e";
			}
		}

		public function guardarNivelPuesto($descripcion){
			$query = "insert into $this->tabla (descripcion) values ('$descripcion')";

			//echo "$query";

			try {
				if($this->db->query($query)==true)
				echo "Se registro el NivelPuesto con exito <br>";
				else {
					echo "No se registro el NivelPuesto";
				}
			} catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
				echo "$e";
			}

		}

		public function guardarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto){
			$query = "insert into $this->tabla (nombre, descripcion, idDepartamento, idNivelPuesto)
			values ('$nombre', '$descripcion', $idDepartamento, $idNivelPuesto)";

			try {
				if($this->db->query($query)==true)
				echo "Se registro el Puesto con exito <br>";
				else {
					echo "No se registro el Puesto";
				}
			} catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
				echo "$e";
			}
		}

		public function guardarRequerimiento($descripcion){
			$query = "insert into $this->tabla (descripcion) values('$descripcion')";

			try {
				if($this->db->query($query)==true)
				echo "Se registro el Requerimiento con exito <br>";
				else {
					echo "No se registro el Requerimiento";
				}
			} catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
				echo "$e";
			}

		}

		public function guardarTarea($descripcion){
			$query = "insert into this->tabla (descripcion) values('$descripcion')";

			try {
				if($this->db->query($query)==true)
				echo "Se registro la tarea con exito <br>";
				else {
					echo "No se registro la tarea";
				}
			} catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
				echo "$e";
			}

		}




}
