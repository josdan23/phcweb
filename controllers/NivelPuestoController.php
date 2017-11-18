<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/NivelPuesto.php");
require_once("persistencia/EntidadBase.php");

class NivelPuestoController {

	public static function agregarNivelPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto) {
	//	$departamento = new Puesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);
	//	$baseDatos = Persistencia::obtenerInstancia()->guardarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);

	}


	public static function obtenerNivelPuestos() {
		$entidad = new EntidadBase("t_nivel_puesto");
		$resultado = $entidad->obtenerTodos();

		return $resultado;


		 
	}

	public static function eliminarNivelPuesto($id) {
		$entidad = new EntidadBase("t_nivel_puesto");
		$entidad->borrarPorId();

	}

	public static function obtenerUnNivelPuesto($id) {
		$nivelpuesto = new NivelPuesto();
		$entidad = new EntidadBase("v_nivel_puesto");
		
		$resultado = $entidad->obtenerPorId($id);
		
		$nivelpuesto->setIdNivelPuesto( $resultado['idNivelPuesto']);
		$nivelpuesto->setDescripcion( $resultado['descripcion']);
		
		return $nivelpuesto;
	}

}