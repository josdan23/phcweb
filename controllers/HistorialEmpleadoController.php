<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/HistorialEmpleado.php");
include_once ("../persistencia/EntidadBase.php");

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
		$historialempleado = new HistorialEmpleado();
		$historialempleado = new EntidadBase("v_historial_empleado");
		
		$resultado = $entidad->obtenerPorId($id);
		
		$historialempleado->setIdHistorialEmpleado( $resultado['idHistorialEmpleado']);
		$historialempleado->setFechaIngreso( $resultado['fechaIngreso']);
		$historialempleado->setFechaEgreso( $resultado['fechaEgreso']);
		$historialempleado->setIdEmpleado( $resultado['idEmpleado']);
		$historialempleado->setIdPuesto( $resultado['idPuesto']);
		

		return $historialempleado;
	}

}