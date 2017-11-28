<?php

include_once '../domain/Empleado.php';
include_once '../persistencia/EntidadBase.php';

class EmpleadoController {

	public static function agregarEmpleado($apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo) {
		$empleado = new Empleado($apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo);
		$entidad = new EntidadBase("t_empleado");
		$entidad->guardarEmpleado($empleado);
	}

	public static function obtenerEmpleados() {
		$entidad = new EntidadBase("t_empleado");
		$resultado = $entidad->obtenerTodos();
		return $resultado;
	}

	public static function eliminarEmpleado($id) {
		$entidad = new EntidadBase("t_empleado");

		$entidad->borrarPorId();

	}

	public static function obtenerUnEmpleado($id) {
		
		$entidad = new EntidadBase("t_empleado");

		$resultado = $entidad->obtenerPorId('idEmpleado', $id);

		$empleado = new Empleado(
			$resultado[0]['apellido'],
			$resultado[0]['nombre'],
			$resultado[0]['legajo'],
			$resultado[0]['fechaIngreso'],
			$resultado[0]['dni'],
			$resultado[0]['cuil'],
			$resultado[0]['fechaNacimiento'],
			$resultado[0]['esActivo'],
			$resultado[0]['telefono'],
			$resultado[0]['email'],
			$resultado[0]['domicilio'],
			$resultado[0]['sexo']
		);

		$empleado->setIdEmpleado( $resultado[0]['idEmpleado']);

		return $empleado;
	}

	
}
