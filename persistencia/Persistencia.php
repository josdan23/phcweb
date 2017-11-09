<?php 

require_once("domain/Departamento.php");

class Persistencia {

	//variable de persistencia
	static $instancia;

	//array para mantener los datos en la memoria
	public $arrayDepartamentos = array();

	private function __construct(){
		$depto = new Departamento("Recursos Humanos");
		$this->arrayDepartamentos[] = $depto;

		$depto = new Departamento("otro");
		$this->arrayDepartamentos[] = $depto;
	}

	public static function obtenerInstancia(){
		if(!isset(self::$instancia)) {
			self::$instancia = new Persistencia();
		}
		return self::$instancia;
	}

	public function guardarDepartamento($departamento) {
		$this->arrayDepartamentos[] = $departamento;
		echo "departamento guardado";
	}

	public function recuperarDepartamentos() {
		return $this->arrayDepartamentos;
	}

}