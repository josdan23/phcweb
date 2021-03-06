<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/Departamento.php");
require_once("persistencia/EntidadBase.php");

class DepartamentoController {

	public static function agregarDepartamento($nombre,$idNivelDepartamento) {
		$departamento = new Departamento($nombre,$idNivelDepartamento);
		$baseDatos = Persistencia::obtenerInstancia()->guardarDepartamento($departamento);

	}


	public static function obtenerDepartamentos() {
		$entidad = new EntidadBase("Departamento");
		$resultado = $entidad->obtenerTodos();

		return $resultado;


		 
	}

	public static function eliminarDepartamento($id) {
		$entidad = new EntidadBase("Departamento");
		$entidad->borrarPorId();

	}

	public static function obtenerUnDepartamento($id) {
		$entidad = new EntidadBase("Departamento");
		$departamento = $entidad->obtenerPorId($id);

		return $departamento
	}

}