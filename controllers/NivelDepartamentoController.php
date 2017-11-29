<?php

include_once '../persistencia/EntidadBase.php';

class NivelDepartamentoController {

	public static function agregarNivelDepartamento($nombre) {
		$entidad = new EntidadBase("t_nivel_departamento");
		$entidad->guardarNivelDepartamento($nombre);
	}

	public static function obtenerNivelDepartamentos() {
		$entidad = new EntidadBase("t_nivel_departamento");
        return $entidad->obtenerTodos();
	}

	public static function eliminarNivelDepartamento($id) {
		$entidad = new EntidadBase("t_nivel_departamento");
		$entidad->borrarPorId('idNivelDepartamento', $id);
	}

	public static function obtenerUnNivelDepartamento($id) {
        $entidad = new EntidadBase("t_nivel_departamento");
        return $entidad->obtenerPorId('idNivelDepartamento', $id);
	}

}
?>