<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/Puesto.php");
require_once("persistencia/EntidadBase.php");

class PuestoController {

	public static function agregarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto) {
	//	$departamento = new Puesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);
	//	$baseDatos = Persistencia::obtenerInstancia()->guardarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);

	}


	public static function obtenerPuestos() {
		$entidad = new EntidadBase("t_puesto");
		$resultado = $entidad->obtenerTodos();

		return $resultado;


		 
	}

	public static function eliminarPuesto($id) {
		$entidad = new EntidadBase("t_puesto");
		$entidad->borrarPorId();

	}

	public static function obtenerUnPuesto($id) {
		$puesto = new NivelPuesto();
		$entidad = new EntidadBase("v_puesto");
		
		$resultado = $entidad->obtenerPorId($id);
		
		$puesto->setIdPuesto( $resultado['idPuesto']);
		$puesto->setNombre( $resultado['nombre']);
		$puesto->setDescripcion( $resultado['descripcion']);
		$puesto->setIdDepartamento( $resultado['idDepartamento']);
		$puesto->setIdNivelPuesto( $resultado['idNivelPuesto']);

		return $puesto;
	}

}