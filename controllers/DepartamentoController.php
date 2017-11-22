<?php

require __DIR__.'/../domain/Departamento.php';
include_once ("../persistencia/EntidadBase.php");



class DepartamentoController {

	public static function agregarDepartamento($nombre,$idNivelDepartamento) {
			$departamento = new Departamento($nombre,$idNivelDepartamento);
			$entidad = new EntidadBase("t_departamento");
			$entidad->guardarDepartamento($departamento);

	}


	public static function obtenerDepartamentos() {
		$entidad = new EntidadBase("t_departamento");
		$resultado = $entidad->obtenerTodos();
		return $resultado;

	}

	public static function eliminarDepartamento($id) {
		$entidad = new EntidadBase("t_departamento");
		$entidad->borrarPorId();

	}

	public static function obtenerUnDepartamento($id) {

		$departamento = new Departamento();
		$entidad = new EntidadBase("t_departamento");

		$resultado = $entidad->obtenerPorId($id);

		$departamento->setIdDepartamento( $resultado['idDepartamento']);
		$departamento->setNombre( $resultado['nombre']);
		$departamento->setIdNivelDepartamento( $resultado['idNivelDepartamento']);

		return $departamento;
	}

}
