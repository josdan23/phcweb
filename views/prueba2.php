<?php 
	
require_once("../controllers/EmpleadoController.php");


$array = EmpleadoController::obtenerUnEmpleado("2");

var_dump($array);