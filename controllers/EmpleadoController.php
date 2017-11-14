<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/Empleado.php");
require_once("persistencia/EntidadBase.php");

class EmpleadoController {

	public static function agregarEmpleado($nombre) {
		$departamento = new Empleado($nombre);
		$baseDatos = Persistencia::obtenerInstancia()->guardarEmpleado($Empleado);

	}


	public static function obtenerEmpleado() {
		$entidad = new EntidadBase("Empleado");

		$resultado = $entidad->obtenerTodos();


		return $resultado;
	}
	

	public static function eliminarEmpleado($id) {
		$entidad = new EntidadBase("Empleado");

		$entidad->borrarPorId();

	}

	public static function obtenerUnEmpleado($id) {
		$empleado = new Empleado();
		$entidad = new EntidadBase("v_empleado");
		
		$resultado = $entidad->obtenerPorId($id);
		
		$empleado->setIdEmpleado( $resultado['idEmpleado']);
		$empleado->setApellido( $resultado['apellido']);
		$empleado->setNombre( $resultado['nombre']);
		$empleado->setLegajo( $resultado['legajo']);
		$empleado->setFechaIngreso( $resultado['fechaIngreso']);
		$empleado->setDni( $resultado['dni']);
		$empleado->setCuil( $resultado['cuil']);
		$empleado->setFechaNacimiento( $resultado['fechaNacimiento']);
		$empleado->setEsActivo( $resultado['esActivo']);
		$empleado->setTelefono( $resultado['telefono']);
		$empleado->setEmail( $resultado['email']);
		$empleado->setDomicilio( $resultado['domicilio']);
		$empleado->setSexo( $resultado['sexo']);


		return $empleado;
	}
}