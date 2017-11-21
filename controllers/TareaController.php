<?php

require_once("../persistencia/EntidadBase.php");

class TareaController {


	public static function agregarTarea($descripcion) {

		$entidad = new EntidadBase("t_tarea");
		$entidad->guardarTarea($descripcion);
	}


	public static function obtenerTareas() {
		$entidad = new EntidadBase("t_tarea");
		$resultado = $entidad->obtenerTodos();

		return $resultado;



	}

	public static function eliminarTarea($id) {
		$entidad = new EntidadBase("t_tarea");
		$entidad->borrarPorId();

	}

	public static function obtenerUnaTarea($id) {
		$tarea = new Tarea();
		$entidad = new EntidadBase("v_tarea");

		$resultado = $entidad->obtenerPorId($id);

		$tarea->setIdTarea( $resultado['idTarea']);
		$tarea->setDescripcion($resultado['descripcion']);

		return $tarea;
	}

}
