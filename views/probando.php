<?php 

require_once("../persistencia/EntidadBase.php");

$entidad = new EntidadBase("Empleado");

$arrayDepartamentos = $entidad->obtenerTodos();
var_dump($arrayDepartamentos);


