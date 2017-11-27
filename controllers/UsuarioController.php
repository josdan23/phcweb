<?php 

require_once("../domain/Usuario.php");
include_once ("../persistencia/EntidadBase.php");

class UsuarioController {

	public static function agregarUsuario($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada) {
	    $usuario = new Usuario($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada);
	    $entidad = new EntidadBase('t_usuario');
	    $entidad->guardarUsuario($usuario);
	}

	public static function obtenerUsuarios() {
		$entidad = new EntidadBase("t_usuario");
		$resultado = $entidad->obtenerTodos();

		return $resultado;
	}

	public static function eliminarUsuario($id) {
		$entidad = new EntidadBase("t_usuario");
		$entidad->borrarPorId();
	}

	/*
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
    */
}