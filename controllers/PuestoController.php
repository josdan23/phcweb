<?php

include_once '../persistencia/EntidadBase.php';


class PuestoController {

	public static function agregarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto) {
		$entidad = new EntidadBase("t_puesto");
		$entidad->guardarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);
	}

	public static function modificarPuesto($idPuesto, $nombre, $descripcion, $idDepartamento, $idNivelPuesto) {
		$entidad = new EntidadBase("t_puesto");
		$entidad->modificarPuesto($idPuesto, $nombre, $descripcion, $idDepartamento, $idNivelPuesto);
	}

	public static function obtenerPuestos() {
		$entidad = new EntidadBase("v_puesto");
        return $entidad->obtenerTodos();
	}

	public static function eliminarPuesto($id) {
		$entidad = new EntidadBase("t_puesto");
		$entidad->borrarPorId('idPuesto', $id);
	}

	public static function obtenerUnPuesto($id) {
        $entidad = new EntidadBase("v_puesto");
        return $entidad->obtenerPorId('idPuesto', $id);
	}

    public static function asignarPuestoAEmpleado($idPuesto, $idEmpleado){
        $entidad = new EntidadBase('t_historial_empleado');
        $entidad->asignarPuestoAEmpleado($idPuesto, $idEmpleado);
    }

    public static function sacarEmpleadoDelPuesto($idEmpleado, $idPuesto){
        $entidad = new EntidadBase('t_historial_empleado');
        $entidad->sacarEmpleadoDelPuesto($idEmpleado, $idPuesto);
    }

    public static function asignarRequerimientoAPuesto($idRequerimiento, $idPuesto){
        $entidad = new EntidadBase('t_requerimiento_puesto');
        $entidad->asignarRequerimientoAPuesto($idRequerimiento,$idPuesto);
    }

    public static function sacarRequerimientoDelPuesto($idRequerimiento, $idPuesto){
        $entidad = new EntidadBase('t_requerimiento_puesto');
        $entidad->borrarPorIdDoble('idRequerimiento', $idRequerimiento, 'idPuesto',$idPuesto);
    }

    public static function asignarTareaAPuesto($idTarea, $idPuesto){
        $entidad = new EntidadBase('t_puesto_tarea');
        $entidad->asignarTareaAPuesto($idTarea,$idPuesto);
    }

    public static function sacarTareaDelPuesto($idTarea, $idPuesto){
        $entidad = new EntidadBase('t_puesto_tarea');
        $entidad->borrarPorIdDoble('idTarea', $idTarea, 'idPuesto',$idPuesto);
    }

    Public static function obtenerEmpleadosQueOcupanElPuesto($idPuesto){
        $entidad = new EntidadBase('v_empleado_puesto');
        return $entidad->filtrar('idPuesto', $idPuesto);
    }

    Public static function ObtenerRequerimientosDelPuesto($idPuesto){
        $entidad = new EntidadBase('v_requerimiento_puesto');
        return $entidad->filtrar('idPuesto', $idPuesto);
    }

    Public static function ObtenerTareasDelPuesto($idPuesto){
        $entidad = new EntidadBase('v_puesto_tarea');
        return $entidad->filtrar('idPuesto', $idPuesto);
    }
}
