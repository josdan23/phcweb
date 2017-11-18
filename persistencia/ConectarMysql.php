<?php

require_once("ConfiguracionMysql.php");

class ConectarMysql {

	static $instancia;

	private $nombreHost;
	private $usuario;
	private $constrasenia;
	private $baseDatos;

	function __construct(){

		$this->nombreHost = "localhost";
		$this->usuario = "root";
		$this->contrasenia = "localhost";
		$this->baseDatos = "PHC";

	}

	public static function getInstance(){
		if (!isset(self::$instancia)){
			self::$instancia = new ConectarMysql();
		}
		return self::$instancia;
	}

	public function conectar() {
		$conexion=mysqli_connect($this->nombreHost, $this->usuario, $this->contrasenia, $this->baseDatos) or
    		die("Problemas con la conexión");

    		$conexion->set_charset("utf8");

		return $conexion;

	}

	public function cerrarConexion($conexion) {
		mysqli_close($conexion);
	}

}
