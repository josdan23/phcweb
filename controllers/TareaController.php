<?php

include_once '../persistencia/EntidadBase.php';


class TareaController {


	public static function agregarTarea($descripcion) {
		$entidad = new EntidadBase("t_tarea");
		$entidad->guardarTarea($descripcion);
	}

	public static function modificarTarea($idTarea, $descripcion) {
		$entidad = new EntidadBase("t_tarea");
		$entidad->modificarTarea($idTarea, $descripcion);
	}

	public static function obtenerTareas() {
		$entidad = new EntidadBase("t_tarea");
		return $entidad->obtenerTodos();
	}

	public static function eliminarTarea($id) {
		$entidad = new EntidadBase("t_tarea");
		$entidad->borrarPorId('idTarea', $id);
	}

	public static function obtenerUnaTarea($id) {
        $entidad = new EntidadBase("t_tarea");
        return $entidad->obtenerPorId('idTarea', $id);
	}

    public static function asignarTareaAPuesto($idTarea, $idPuesto){
        $entidad = new EntidadBase('t_puesto_tarea');
        $entidad->asignarTareaAPuesto($idTarea,$idPuesto);
    }

    public static function sacarTareaDelPuesto($idTarea, $idPuesto){
        $entidad = new EntidadBase('t_puesto_tarea');
        $entidad->borrarPorIdDoble('idTarea', $idTarea, 'idPuesto',$idPuesto);
    }

    Public static function obtenerPuestosConLaTarea($idTarea){
        $entidad = new EntidadBase('v_puesto_tarea');
        return $entidad->filtrar('idTarea', $idTarea);
    }
}
