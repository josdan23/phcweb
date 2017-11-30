<?php

include_once '../persistencia/EntidadBase.php';

class HistorialEmpleadoController {

	public static function asignarPuestoAEmpleado($idPuesto, $idEmpleado){
        $entidad = new EntidadBase('t_historial_empleado');
        $entidad->asignarPuestoAEmpleado($idPuesto, $idEmpleado);
    }

	public static function obtenerHistorialEmpleado() {
		$entidad = new EntidadBase("HistorialEmpleado");
        return $entidad->obtenerTodos();
	}

}
