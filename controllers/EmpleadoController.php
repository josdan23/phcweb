<?php

//require_once("persistencia/Persistencia.php");

//require_once("domain/Empleado.php");
require __DIR__.'/../domain/Empleado.php';
require __DIR__.'/../persistencia/EntidadBase.php';

//require_once("persistencia/EntidadBase.php");

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
		$empleado = new Empleado();
		$entidad = new EntidadBase("t_empleado");

		$resultado = $entidad->obtenerPorId($id);

		$empleado->setIdEmpleado( $resultado['idEmpleado']);
		$empleado->setApellido( $resultado['apellido']);
		$empleado->setNombre( $resultado['nombre']);
		$empleado->setLegajo( $resultado['legajo']);
		$empleado->setFechaIngreso( $resultado['fechaIngreso']);
		$empleado->setDni( $resultado['dni']);
		$empleado->setCuil( $resultado['cuil']);
		$empleado->setFechaNacimiento( $resultado['fechaNacimiento']);
		$empleado->setEsActivo( $resultado['esActivo']);
		$empleado->setTelefono( $resultado['telefono']);
		$empleado->setEmail( $resultado['email']);
		$empleado->setDomicilio( $resultado['domicilio']);
		$empleado->setSexo( $resultado['sexo']);


		return $empleado;
	}
}
