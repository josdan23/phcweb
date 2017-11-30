<?php

include_once '../persistencia/EntidadBase.php';

class UsuarioController {

	public static function agregarUsuario($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada) {
	    $entidad = new EntidadBase('t_usuario');
	    $entidad->guardarUsuario($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada);
	}

	public static function modificarUsuario($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada) {
	    $entidad = new EntidadBase('t_usuario');
	    $entidad->modificarUsuario($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada);
	}

	public static function obtenerUsuarios() {
		$entidad = new EntidadBase("t_usuario");
        return $entidad->obtenerTodos();
	}

	public static function eliminarUsuario($id) {
		$entidad = new EntidadBase("t_usuario");
		$entidad->borrarPorId('idEmpleado', $id);
	}

    public static function obtenerUnUsuario($id) {
        $entidad = new EntidadBase("t_usuario");
        return $entidad->obtenerPorId('idEmpleado', $id);
    }

}
