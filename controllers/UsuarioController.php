<?php 

require_once("persistencia/Persistencia.php");
require_once("domain/Usuario.php");
require_once("persistencia/EntidadBase.php");

class UsuarioController {

	public static function agregarUsuario($nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada) {
	//	$departamento = new Puesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);
	//	$baseDatos = Persistencia::obtenerInstancia()->guardarPuesto($nombre, $descripcion, $idDepartamento, $idNivelPuesto);

	}


	public static function obtenerUsuario() {
		$entidad = new EntidadBase("t_usuario");
		$resultado = $entidad->obtenerTodos();

		return $resultado;


		 
	}

	public static function eliminarUsuario($id) {
		$entidad = new EntidadBase("t_usuario");
		$entidad->borrarPorId();

	}

	public static function obtenerUsuario($id) {
		$usuario = new Usuario();
		$entidad = new EntidadBase("v_usuario");
		
		$resultado = $entidad->obtenerPorId($id);
		
		$usuario->setIdEmpleado( $resultado['idEmpleado']);
		$usuario->setNombreUsuario( $resultado['nombreUsuario']);
		$usuario->setContrasenia( $resultado['contrasenia']);
		$usuario->setEsAdministrador( $resultado['esAdministrador']);
		$usuario->setHabilitado( $resultado['habilitado']);
		$usuario->setContraseniaRestaurada( $resultado['contraseniaRestaurada']);

		return $usuario;
	}

}