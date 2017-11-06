<?php 

require_once("./domain/Departamento.php");

class Persistencia {

	public static $persistencia;

	public static $arrayDepartamento = array();

	private function __construct(){
		$persistencia = new $Persistencia;
	}

	public static function obtenerInstancia(){
		if(!isset(self::$persistencia)) {
			self::$persistencia = new $Persistencia;
		}
	}

	public function agregarDepartamento($departamento) {
		$this->arrayDepartamento[] = $departamento;
	}

	public function obtenerDepartamento() {
		return $this->arrayDepartamento;
	}

}