<?php

include_once '../persistencia/EntidadBase.php';


class PuestoController {

	public static function agregarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto) {
		$entidad = new EntidadBase("t_puesto");
		$entidad->guardarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);
	}


	public static function obtenerPuestos() {
		$entidad = new EntidadBase("t_puesto");
        return $entidad->obtenerTodos();
	}

	public static function eliminarPuesto($id) {
		$entidad = new EntidadBase("t_puesto");
		$entidad->borrarPorId('idPuesto', $id);
	}

	public static function obtenerUnPuesto($id) {
        $entidad = new EntidadBase("t_puesto");
        return $entidad->obtenerPorId('idPuesto', $id);
	}

}
