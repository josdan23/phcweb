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
		$entidad = new EntidadBase("Empleado");

		$resultado = $entidad->obtenerPorId($id);

		return $resultado;
	}
}