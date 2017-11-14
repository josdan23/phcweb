<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/NivelDepartamento.php");
require_once("persistencia/EntidadBase.php");

class NivelDepartamentoController {

	public static function agregarNivelDepartamento($nombre) {
	//	$niveldepartamento = new NivelDepartamento($nombre);
	//	$baseDatos = Persistencia::obtenerInstancia()->guardarNivelDepartamento($niveldepartamento);

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