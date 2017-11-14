<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/Requerimiento.php");
require_once("persistencia/EntidadBase.php");

class TareaController {

	public static function agregarRequerimiento($descripcion) {
	//	$departamento = new Tarea($nombre,$idNivelDepartamento);
	//	$baseDatos = Persistencia::obtenerInstancia()->guardarTarea($departamento);

	}


	public static function obtenerRequerimientos() {
		$entidad = new EntidadBase("t_requerimiento");
		$resultado = $entidad->obtenerTodos();

		return $resultado;


		 
	}

	public static function eliminarRequerimiento($id) {
		$entidad = new EntidadBase("t_requerimiento");
		$entidad->borrarPorId();

	}

	public static function obtenerUnRequerimiento($id) {
		$requerimiento = new Requerimiento();
		$entidad = new EntidadBase("v_requerimiento");
		
		$resultado = $entidad->obtenerPorId($id);
		
		$requerimiento->setIdRequerimiento( $resultado['idRequerimiento']);
		$requerimiento->setDescripcion($resultado['descripcion']);
		
		return $requerimiento;
	}

}