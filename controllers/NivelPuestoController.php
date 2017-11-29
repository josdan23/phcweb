<?php

include_once '../persistencia/EntidadBase.php';

class NivelPuestoController {

	public static function agregarNivelPuesto($descripcion) {
		$entidad = new EntidadBase("t_nivel_puesto");
		$entidad->guardarNivelPuesto($descripcion);
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
