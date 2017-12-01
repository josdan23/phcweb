<?php

include_once '../persistencia/EntidadBase.php';

class NivelPuestoController {

	public static function agregarNivelPuesto($descripcion) {
		$entidad = new EntidadBase("t_nivel_puesto");
		$entidad->guardarNivelPuesto($descripcion);
	}

	public static function modificarNivelPuesto ($idNivelPuesto, $nombre){
		$entidad = new EntidadBase("t_nivel_puesto");
		$entidad->modificarNivelPuesto($idNivelPuesto,$nombre);
	}

	public static function obtenerNivelPuestos() {
		$entidad = new EntidadBase("t_nivel_puesto");
        return $entidad->obtenerTodos();
	}

	public static function eliminarNivelPuesto($id) {
		$entidad = new EntidadBase("t_nivel_puesto");
		$entidad->borrarPorId('idNivelPuesto', $id);
	}

	public static function obtenerUnNivelPuesto($id) {
        $entidad = new EntidadBase("t_nivel_puesto");
        return $entidad->obtenerPorId('idNivelPuesto', $id);
	}

    Public static function obtenerPuestosDelNivel($idNivelPuesto){
        $entidad = new EntidadBase('t_puesto');
        return $entidad->filtrar('idNivelPuesto', $idNivelPuesto);
    }
}
