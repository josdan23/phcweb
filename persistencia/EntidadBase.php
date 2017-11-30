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

    public function filtrar($columna, $valor) {
        $resultSet = array();
        $query = "select * from $this->tabla where $columna = ?";
        $sentencia = $this->db->prepare($query);
        $sentencia->bind_param('s', $valor);
        $sentencia->execute();
        $registros = $sentencia->get_result();
        while ($row=mysqli_fetch_array($registros)) {
            $resultSet[] = $row;
        }
        $this->conexion->cerrarConexion($this->db);
        return $resultSet;
    }

	public function obtenerPorId($atributo, $id) {
		$query = "select * from $this->tabla where $atributo = ?";
		$sentencia = $this->db->prepare($query);
		$sentencia->bind_param('s', $id);
		$sentencia->execute();
		$registros = $sentencia->get_result();
        $row=mysqli_fetch_array($registros);
		$this->conexion->cerrarConexion($this->db);
        return $row;
	}

	public function borrarPorId($atributo, $id) {
		$query = "delete from $this->tabla where $atributo = ?";
		$sentencia = $this->db->prepare($query);
		$sentencia->bind_param('s', $id);
		$sentencia->execute();

		echo "borrado";

		$this->conexion->cerrarConexion($this->db);
	}

	public function guardarDepartamento($nombreDepartamento,$idNivelDepartamento){
		$query="insert into $this->tabla (nombre,idNivelDepartamento) values('$nombreDepartamento',$idNivelDepartamento)";

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

    public function modificarDepartamento($idDepartamento,$nombreDepartamento,$idNivelDepartamento){
        $query="UPDATE $this->tabla 
                SET nombre = '$nombreDepartamento', idNivelDepartamento = $idNivelDepartamento 
                WHERE idDepartamento = $idDepartamento";

        try {
            //echo "Entro al try <br>";
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se modificó el Departamento con exito </div>";
            else {
                echo "<div class="."well-sm>"."No se modificó el Departamento</div>";
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
                echo "<div class=".'"alert alert-success"'.">Se registro el empleado con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el empleado</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }

    }

    public function guardarNivelDepartamento($nombre){
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

    public function guardarNivelPuesto($descripcion){
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

    public function guardarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto){
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

    public function guardarRequerimiento($descripcion){
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

    public function guardarTarea($descripcion){
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

    public function guardarUsuario($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada){
        $query = "insert into $this->tabla (idEmpleado, nombreUsuario, contrasenia, esAdministrador, habilitado, contraseniaRestaurada) 
                    values($idEmpleado, '$nombreUsuario', MD5('$contrasenia'), $esAdministrador, $habilitado, $contraseniaRestaurada)";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se registro el usuario con exito </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se registro el usuario. Importante: Para que se registre un nuevo Usuario este no debe existir ya en la base de datos</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

    public function asignarPuestoAEmpleado($idPuesto, $idEmpleado){
        /*el sp asigna el puesto al empleado solo si no está ya ocupando el puesto*/
        $query = "CALL sp_asignar_puesto_a_empleado($idPuesto, $idEmpleado)";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se asignó el puesto al empleado </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se asignó el puesto al empleado</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

    public function sacarEmpleadoDelPuesto($idEmpleado, $idPuesto){
        /*Aquí habría que hacer una verificación y asignar el puesto al empleado solo si no está ya ocupando el puesto*/
        $query = "insert into $this->tabla (idPuesto, idEmpleado, fechaEgreso)
                    values($idPuesto, $idEmpleado, NOW())";

        try {
            if($this->db->query($query)==true)
                echo "<div class=".'"alert alert-success"'.">Se asignó el puesto al empleado </div>";
            else {
                echo "<div class=".'"alert alert-warning"'.">No se asignó el puesto al empleado</div>";
            }
        } catch (Exception $e) { //Esto no muestra el tipo de error SQL asi que si alguno sabe como hacer eso pongalo en todos los try
            echo "$e";
        }
    }

}
?>
