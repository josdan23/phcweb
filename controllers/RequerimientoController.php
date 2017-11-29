<?php

include_once '../persistencia/EntidadBase.php';


class RequerimientoController {

	public static function agregarRequerimiento($descripcion) {
		$entidad = new EntidadBase("t_requerimiento");
		$entidad->guardarRequerimiento($descripcion);
	}

	public static function obtenerRequerimientos() {
		$entidad = new EntidadBase("t_requerimiento");
        return $entidad->obtenerTodos();
	}

	public static function eliminarRequerimiento($id) {
		$entidad = new EntidadBase("t_requerimiento");
		$entidad->borrarPorId('idRequerimiento', $id);
	}

	public static function obtenerUnRequerimiento($id) {
        $entidad = new EntidadBase("t_requerimiento");
        return $entidad->obtenerPorId('idRequerimiento', $id);
	}

}
