<?php

require __DIR__.'/../domain/Requerimiento.php';
include_once ("../persistencia/EntidadBase.php");


class RequerimientoController {

	public static function agregarRequerimiento($descripcion) {
		$entidad = new EntidadBase("t_requerimiento");
		$entidad->guardarRequerimiento($descripcion);
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
