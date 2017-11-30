<?php

include_once '../persistencia/EntidadBase.php';

class EmpleadoController {

	public static function agregarEmpleado($apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo) {
		$entidad = new EntidadBase("t_empleado");
		$entidad->guardarEmpleado($apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo);
	}

	public static function modificarEmpleado($idEmpleado,$apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo){
		$entidad = new EntidadBase("t_empleado");
		$entidad-> modificarEmpleado($idEmpleado,$apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo);
	}

	public static function obtenerEmpleados() {
		$entidad = new EntidadBase("t_empleado");
        return $entidad->obtenerTodos();
	}

	public static function eliminarEmpleado($id) {
		$entidad = new EntidadBase("t_empleado");
		$entidad->borrarPorId('idEmpleado', $id);
	}

	public static function obtenerUnEmpleado($id) {
        $entidad = new EntidadBase("t_empleado");
        return $entidad->obtenerPorId('idEmpleado', $id);
	}

    public static function asignarPuestoAEmpleado($idPuesto, $idEmpleado){
        $entidad = new EntidadBase('t_historial_empleado');
        $entidad->asignarPuestoAEmpleado($idPuesto, $idEmpleado);
    }

    public static function sacarEmpleadoDelPuesto($idEmpleado, $idPuesto){
        $entidad = new EntidadBase('t_historial_empleado');
        $entidad->sacarEmpleadoDelPuesto($idEmpleado, $idPuesto);
    }
}
