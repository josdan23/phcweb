<?php

include_once '../persistencia/EntidadBase.php';

class NivelDepartamentoController {

	public static function agregarNivelDepartamento($nombre) {
		$entidad = new EntidadBase("t_nivel_departamento");
		$entidad->guardarNivelDepartamento($nombre);
	}

	public static function obtenerNivelDepartamentos() {
		$entidad = new EntidadBase("t_nivel_departamento");
		$resultado = $entidad->obtenerTodos();

		return $resultado;
	}

	public static function eliminarNivelDepartamento($id) {
		$entidad = new EntidadBase("t_nivel_departamento");
		$entidad->borrarPorId();
	}

	public static function obtenerUnNivelDepartamento($id) {
	    $niveldepartamento = new NivelDepartamento();
		$entidad = new EntidadBase("v_nivel_departamento");

		$resultado = $entidad->obtenerPorId($id);

		$niveldepartamento->setIdNivelDepartamento( $resultado['idNivelDepartamento']);
		$niveldepartamento->setNombre( $resultado['nombre']);

		return $niveldepartamento;
	}

}
?>