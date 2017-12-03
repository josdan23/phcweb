<?php

include_once '../persistencia/EntidadBase.php';



class DepartamentoController {

	public static function agregarDepartamento($nombreDepartamento,$idNivelDepartamento) {
			$entidad = new EntidadBase("t_departamento");
			$entidad->guardarDepartamento($nombreDepartamento,$idNivelDepartamento);
	}

	public static function obtenerDepartamentos() {
		$entidad = new EntidadBase("v_departamento");
        return $entidad->obtenerTodos();
	}

	public static function eliminarDepartamento($id) {
		$entidad = new EntidadBase("t_departamento");
		$entidad->borrarPorId('idDepartamento', $id);
	}

	public static function obtenerUnDepartamento($id) {
		$entidad = new EntidadBase("v_departamento");
		return $entidad->obtenerPorId('idDepartamento', $id);
	}

    public static function modificarDepartamento($idDepartamento,$nombreDepartamento,$idNivelDepartamento) {
        $entidad = new EntidadBase("t_departamento");
        $entidad->modificarDepartamento($idDepartamento,$nombreDepartamento,$idNivelDepartamento);
    }

    Public static function obtenerPuestosEnElDepartamento($idDepartamento){
        $entidad = new EntidadBase('t_puesto');
        return $entidad->filtrar('idDepartamento', $idDepartamento);
    }
}
