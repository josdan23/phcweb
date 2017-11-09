<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/Departamento.php");
require_once("persistencia/EntidadBase.php");

class DepartamentoController {

	public static function agregarDepartamento($nombre) {
		$departamento = new Departamento($nombre);
		$baseDatos = Persistencia::obtenerInstancia()->guardarDepartamento($departamento);

	}


	public static function obtenerDepartamentos() {
		$entidad = new EntidadBase("Departamento");

		$resultado = $entidad->obtenerTodos();


		return $resultado;


		 //return Persistencia::obtenerInstancia()->recuperarDepartamentos();
	}

	public static function eliminarDepartamento($id) {
		$entidad = new EntidadBase("Departamento");

		$entidad->borrarPorId();

	}

}