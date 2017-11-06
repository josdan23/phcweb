<?php 

require_once("../persistencia/Persistencia.php");
require_once("../domain/Departamento.php");

class DepartamentoController {

	public static function agregarDepartamento($nombre) {
		$departamento = new Departamento($nombre);
		$baseDatos = Persistencia::obtenerInstancia();
		$baseDatos->guardarDepartamento($departamento);
		//echo "guadado";
	}


	public static function obtenerDepartamentos() {
		 return Persistencia::obtenerInstancia()->recuperarDepartamentos();
	}

}