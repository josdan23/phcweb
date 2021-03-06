<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/HistorialEmpleado.php");
require_once("persistencia/EntidadBase.php");

class HistorialEmpleadoController {

	public static function agregarHistorialEmpleado($fechaIngreso,$fechaEgreso,$idEmpleado,$idPuesto) {
		$historialempleado = new HistorialEmpleado($fechaIngreso,$fechaEgreso,$idEmpleado,$idPuesto);
		$baseDatos = Persistencia::obtenerInstancia()->guardarHistorialEmpleado($historialempleado);

	}


	public static function obtenerHistorialEmpleado() {
		$entidad = new EntidadBase("HistorialEmpleado");
		$resultado = $entidad->obtenerTodos();

		return $resultado;


		 
	}

	public static function eliminarHistorialEmpleado($id) {
		$entidad = new EntidadBase("HistorialEmpleado");
		$entidad->borrarPorId();

	}

	public static function obtenerUnHistorialEmpleado($id) {
		$entidad = new EntidadBase("HistorialEmpleado");
		$historialempleado = $entidad->obtenerPorId($id);

		return $historialempleado;
	}

}