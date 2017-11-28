<?php

require_once 'ConectarMysql.php';

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

	public function obtenerPorId($atributo, $id) {
		$resultSet = array();

		$query = "select * from $this->tabla where $atributo = ?";
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

	public function borrarPorId($atributo, $id) {

		$query = "delete from $this->tabla where $atributo = ?";
		$sentencia = $this->db->prepare($query);
		$sentencia->bind_param('s', $id);
		$sentencia->execute();
		//$registros = $sentencia->get_result();

		echo "borrado";

		$this->conexion->cerrarConexion($this->db);
	}

	public function guardarDepartamento(Departamento $departamento){
		$nombreDepartamento = $departamento->getNombre();
		$idNivelDepartamento = $departamento->getIdNivelDepartamento();
		$query="insert into $this->tabla (nombre,idNivelDepartamento) values('$nombreDepartamento',$idNivelDepartamento)";

		//echo "$query <br>";
		try {
			//echo "Entro al try <br>";
			if($this->db->query($query)==true)
				echo "<div class=".'"alert alert-success"'.">Se registro el departamento con exito </div>";
			else {
				echo "<div class="."well-sm>"."No se Registro el Departamento</div>";
			}

		} catch (Exception $e) {
			echo "$e";
		}
	}

    public function guardarEmpleado(Empleado $empleado){
        $apellido = $empleado->getApellido();
        $nombre = $empleado->GetNombre();
        $legajo = $empleado->GetLegajo();
        $fechaIngreso = $empleado->GetFechaIngreso();
        $dni = $empleado->GetDni();
        $cuil = $empleado->GetCuil();
        $fechaNacimiento = $empleado->GetFechaNacimiento();
        $esActivo = $empleado->getEsActivo();
        $telefono = $empleado->getTelefono();
        $email = $empleado->getEmail();
        $domicilio = $empleado->getDomicilio();
        $sexo = $empleado->getSexo();

        $query = "insert into $this->tabla (apellido,nombre,legajo,fechaIngreso,dni,cuil,fechaNacimiento,esActivo,telefono,email,domicilio,sexo)
                  values ('$apellido','$nombre',$legajo,'$fechaIngreso',$dni,'$cuil','$fechaNacimiento',$esActivo,$telefono,'$email','$domicilio','$sexo')";

        //echo "$query";
        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro el empleado con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el empleado</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }

    }

    public function guardarNivelDepartamento(NivelDepartamento $nivelDepartamento){
        $nombre = $nivelDepartamento->getNombre();
        $query = "insert into $this->tabla (nombre) values ('$nombre')";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro el nivel departamento con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el nivel departamento</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

    public function guardarNivelPuesto(NivelPuesto $nivelPuesto){
        $descripcion = $nivelPuesto->getDescripcion();
        $query = "insert into $this->tabla (descripcion) values ('$descripcion')";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro el nivel puesto con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el nivel puesto</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }

    }

    public function guardarPuesto(Puesto $puesto){
        $nombre = $puesto->getNombre();
        $descripcion = $puesto->getDescripcion();
        $idDepartamento = $puesto->getIdDepartamento();
        $idNivelPuesto = $puesto->getIdNivelPuesto();

        $query = "insert into $this->tabla (nombre, descripcion, idDepartamento, idNivelPuesto)
        values ('$nombre', '$descripcion', $idDepartamento, $idNivelPuesto)";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro el puesto con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el puesto</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

    public function guardarRequerimiento(Requerimiento $requerimiento){
        $descripcion = $requerimiento->getDescripcion();
        $query = "insert into $this->tabla (descripcion) values('$descripcion')";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro el requerimiento con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el requerimiento</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

    public function guardarTarea(Tarea $tarea){
        $descripcion = $tarea->getDescripcion();
        $query = "insert into $this->tabla (descripcion) values('$descripcion')";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro la tarea con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro la tarea</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

    public function guardarUsuario(Usuario $usuario){
        $idEmpleado = $usuario->getIdEmpleado();
        $nombreUsuario = $usuario->getNombreUsuario();
        $contrasenia = $usuario->getContrasenia();
        $esAdministrador = $usuario->getEsAdministrador();
        $habilitado = $usuario->getHabilitado();
        $contraseniaRestaurada = $usuario->getContraseniaRestaurada();

        $query = "insert into $this->tabla (idEmpleado, nombreUsuario, contrasenia, esAdministrador, habilitado, contraseniaRestaurada) 
                    values($idEmpleado, '$nombreUsuario', MD5('$contrasenia'), $esAdministrador, $habilitado, $contraseniaRestaurada)";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro el usuario con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el usuario</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

}
?>
