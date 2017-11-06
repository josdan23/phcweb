<?php 

require_once("../domain/Departamento.php");

class Persistencia {

	//variable de persistencia
	static $instancia;

	//array para mantener los datos en la memoria
	public $arrayDepartamento = array();

	private function __construct(){
	}

	public static function obtenerInstancia(){
		if(!isset(self::$instancia)) {
			self::$instancia = new Persistencia();
		}
		return self::$instancia;
	}

	public function guardarDepartamento($departamento) {
		$this->arrayDepartamento[] = $departamento;
		echo "departamento guardado";
	}

	public function recuperarDepartamentos() {
		return $this->arrayDepartamento;
	}

}